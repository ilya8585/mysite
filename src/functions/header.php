<?php
function getHeader() {
    $isLoggedIn = isset($_SESSION['user_id']);
    $username = $isLoggedIn ? $_SESSION['login'] : '';
    
    ob_start();
    ?>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-light rounded" aria-label="Eleventh navbar example">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Главная</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample09">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <?php if ($isLoggedIn): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php">Админка</a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Вход</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        
                        <?php if ($isLoggedIn): ?>
                            <div class="d-flex">
                                <span class="navbar-text me-3">
                                    Привет, <?php echo htmlspecialchars($username); ?>
                                </span>
                                <a href="logout.php" class="btn btn-outline-secondary btn-sm">Выйти</a>
                            </div>
                        <?php else: ?>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <?php
    return ob_get_clean();
}
?>