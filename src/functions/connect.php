<?php
$username = "root";
$password = "";
$dbname = "mysite";

// Функция для поиска сокета
function findMySQLSocket() {
    $possible_paths = [
        '/var/run/mysqld/mysqld.sock',
        '/run/mysqld/mysqld.sock',
        '/tmp/mysql.sock',
        '/var/lib/mysql/mysql.sock',
    ];
    
    foreach ($possible_paths as $path) {
        if (file_exists($path)) {
            return $path;
        }
    }
    
    // Попробуем получить путь из конфигурации
    $config_files = [
        '/etc/mysql/my.cnf',
        '/etc/mysql/mysql.conf.d/mysqld.cnf',
        '/etc/my.cnf',
        '/etc/mysql/my.cnf'
    ];
    
    foreach ($config_files as $config_file) {
        if (file_exists($config_file)) {
            $content = file_get_contents($config_file);
            if (preg_match('/socket\s*=\s*(\S+)/', $content, $matches)) {
                return $matches[1];
            }
        }
    }
    
    return null;
}

try {
    $socket_path = findMySQLSocket();
    
    if ($socket_path && file_exists($socket_path)) {
        // Подключение через сокет
        $dsn = "mysql:unix_socket=$socket_path;dbname=$dbname;charset=utf8mb4";
        $pdo = new PDO($dsn, $username, $password);
    } else {
        // Подключение через TCP/IP
        $dsn = "mysql:host=localhost;dbname=$dbname;charset=utf8mb4";
        $pdo = new PDO($dsn, $username, $password);
    }
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}

// Создание базы данных если не существует
try {
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    $pdo->exec("USE $dbname");
} catch (PDOException $e) {
    error_log("Ошибка при создании базы данных: " . $e->getMessage());
}

// Создание таблицы пользователей
$createTableQuery = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

try {
    $pdo->exec($createTableQuery);
    
    // Добавление тестового пользователя
    $checkUsersQuery = "SELECT COUNT(*) as count FROM users";
    $result = $pdo->query($checkUsersQuery)->fetch(PDO::FETCH_ASSOC);
    
    if ($result['count'] == 0) {
        $hashedPassword = password_hash('admin123', PASSWORD_DEFAULT);
        $insertUserQuery = "INSERT INTO users (login, password) VALUES ('admin', :password)";
        $stmt = $pdo->prepare($insertUserQuery);
        $stmt->execute(['password' => $hashedPassword]);
    }
} catch (PDOException $e) {
    error_log("Ошибка при создании таблицы: " . $e->getMessage());
}

?>