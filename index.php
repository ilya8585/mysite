<?php
require_once "src/functions/header.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="src/css/navbar.css">
  <title>Document</title>
</head>

<body>
  <?php echo getHeader(); ?>
  
  <header>
    <div class="container">
      <div>
        <div class="bg-light p-5 rounded">
          <div class="col-sm-8 mx-auto">
            <h1>Navbar examples</h1>
            <p>This example is a quick exercise to illustrate how the navbar and its contents work. Some navbars extend the width of the viewport, others are confined within a <code>.container</code>. For positioning of navbars, checkout the <a href="../examples/navbar-static/">top</a> and <a href="../examples/navbar-fixed/">fixed top</a> examples.</p>
            <p>At the smallest breakpoint, the collapse plugin is used to hide the links and show a menu button to toggle the collapsed content.</p>
            <p>
              <a class="btn btn-primary" href="../components/navbar/" role="button">View navbar docs »</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="container">
    <!-- Основное содержимое -->
  </main>

  <?php 
  require_once "src/functions/footer.php";
  echo getFooter(); 
  ?>
  
  <script src="src/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</body>

</html>