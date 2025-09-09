<?php
session_start();
require_once "src/functions/connect.php";

// Если пользователь уже авторизован, перенаправляем в админку
if (isset($_SESSION['user_id'])) {
    header("Location: admin.php");
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = trim($_POST['login']);
        $password = $_POST['password'];
        
        if (!empty($login) && !empty($password)) {
            // Ищем пользователя в базе
            $sql = $pdo->prepare("SELECT id, login, password FROM users WHERE login = :login");
            $sql->execute(array("login" => $login));
            $user = $sql->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($password, $user['password'])) {
                // Успешная авторизация
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['login'] = $user['login'];
                header("Location: admin.php");
                exit;
            } else {
                $error = "Неверный логин или пароль";
            }
        } else {
            $error = "Логин и пароль не могут быть пустыми";
        }
    } else {
        $error = "Не все поля были заполнены";
    }
}

require_once "src/functions/header.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="src/css/signin.css" />
  <title>Вход в панель администратора</title>
</head>

<body>
  <?php echo getHeader(); ?>
  
  <main class="form-signin w-100 m-auto">
    <form action="login.php" method="post">
      <img class="mb-4" src="src/img/logo.webp" alt="" width="72" height="72">
      <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
      
      <?php if (!empty($error)): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo htmlspecialchars($error); ?>
        </div>
      <?php endif; ?>
      
      <div class="form-floating">
        <input type="text" class="form-control" id="login" placeholder="Логин" name="login" required>
        <label for="login">Логин</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Пароль" name="password" required>
        <label for="password">Пароль</label>
      </div>
 
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Запомнить меня
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Вход</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2025</p>
    </form>
  </main>
  
  <script src="src/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</body>

</html>