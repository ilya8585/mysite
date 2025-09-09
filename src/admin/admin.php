<?php
require_once "../functions/connect.php";

session_start();

$login = $_POST["login"];
$password = $_POST["password"];

$sql = $dpo->prepare("SELECT id, login FROM user WHERE login=:login AND password=:password");
$sql->execute(array("login" => $login, "password" => $password));
$array = $sql->fetch(PDO::FETCH_ASSOC);

// if ($array["id"] > 0) {
//   $_SESSION["login"] = $array["login"];
//   header("Location:/admin.php");
// } else {
//   header("Location:/login.php");
// }

// *****************************************************
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Проверяем существование ключей
  if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = trim($_POST['login']);
    $password = $_POST['password'];

    // Далее ваша логика авторизации
    if (!empty($login) && !empty($password)) {
      // Проверяем логин и пароль
    } else {
      $error = "Логин и пароль не могут быть пустыми";
    }
  } else {
    $error = "Не все поля были заполнены";
  }
}
