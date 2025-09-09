<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/navrab.css">
  <link rel="stylesheet" href="src/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
  <title>Document</title>
</head>

<body>
  <header>

    <div class="container">
      <nav class="navbar navbar-expand-lg bg-light rounded" aria-label="Eleventh navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Вход</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <form role="search">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
          </div>
        </div>
      </nav>

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

  </main>

  <footer class="container fixed-bottom">
    <div class="d-flex justify-content-md-center">
      <p>
        Copyright 2025-2025
      </p>
    </div>
  </footer>
  <script src="src/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</body>

</html>