<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="src/css/signin.css" />

  <title>Вход в панель администратора.</title>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
</head>

<body>
  <main class="form-signin w-100 m-auto">
    <img class="mb-4" src="src/img/logo.webp" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
    
    <form action="src/admin/admin.php" method="post  ">
      <div class="form-floating">
        <input type="login" class="form-control" id="login" placeholder="name" name="login">
        <label for="floatingInput">Логин</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        <label for="floatingPassword">Пароль</label>
      </div>
 
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Запомнить меня
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Вход</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2025–2025</p>
      <script src="src/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    </form>
  </main>
</body>

</html>