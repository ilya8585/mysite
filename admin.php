<?php
session_start();

// Проверка авторизации
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once "src/functions/header.php";
require_once "src/functions/footer.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="src/css/navbar.css">
  <title>Административная панель</title>
</head>

<body>
  <?php echo getHeader(); ?>
  
  <div class="container mt-4">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Добро пожаловать, <?php echo htmlspecialchars($_SESSION['login']); ?>!</h4>
      <p>Вы успешно вошли в административную панель.</p>
      <hr>
      <p class="mb-0"><a href="logout.php" class="alert-link">Выйти из системы</a></p>
    </div>
    
    <div class="card">
      <div class="card-header">
        <h5>Управление контентом</h5>
      </div>
      <div class="card-body">
        <p>Здесь будет функционал административной панели.</p>
      </div>
    </div>
  </div>

  <?php echo getFooter(); ?>
  
  <script src="src/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</body>

</html>