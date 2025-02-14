<?php
$page = isset($page) ? $page : 'home';
?>
<!doctype html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <title>Henkilökunta - Linnakello Hämeenlinna</title>
</head>
<body>
<header class="bg-dark-gray">
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            <a href="./index.php" class="navbar-brand d-flex align-items-center link-body-emphasis text-decoration-none">
                <img class="logo" src="./assets/logo.png" alt="logo">
                <div class="logo-text">
                    <span class="fs-4 text-white">Linnakello</span>
                    <span class="fs-6 text-white">Hämeenlinna</span>
                </div>
            </a>

            <button class="navbar-toggler custom-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNav"
                    aria-controls="mainNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
              <span class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="./index.php" class="nav-link text-white <?php echo ($page === 'home') ? 'nav-active' : ''; ?>" <?php if ($page === 'home') echo 'aria-current="page"'; ?>>Etusivu</a></li>
                    <li class="nav-item"><a href="meista.php" class="nav-link text-white <?php echo ($page === 'meista') ? 'nav-active' : ''; ?>" <?php if ($page === 'home') echo 'aria-current="page"'; ?>>Tietoa meistä</a></li>
                    <li class="nav-item"><a href="kauppa.php" class="nav-link text-white <?php echo ($page === 'kauppa') ? 'nav-active' : ''; ?>" <?php if ($page === 'home') echo 'aria-current="page"'; ?>>Kauppa</a></li>
                    <li class="nav-item"><a href="yhteystiedot.php" class="nav-link text-white <?php echo ($page === 'yhteystiedot') ? 'nav-active' : ''; ?>" <?php if ($page === 'home') echo 'aria-current="page"'; ?>>Yhteystiedot</a></li>
                    <li class="nav-item"><a href="palvelut.php" class="nav-link text-white <?php echo ($page === 'palvelut') ? 'nav-active' : ''; ?>" <?php if ($page === 'home') echo 'aria-current="page"'; ?>>Palvelut</a></li>
                    <li class="nav-item"><a href="henkilokunta.php" class="nav-link text-white <?php echo ($page === 'henkilokunta') ? 'nav-active' : ''; ?>" <?php if ($page === 'home') echo 'aria-current="page"'; ?>>Henkilökunta</a></li>
                    <li class="nav-item"><a href="kauppa.php" class="nav-link text-white"><img src="./assets/shoppingbasket.png" width="20" height="20" alt="ostoskori"></a></li>
                </ul>
                <div class="auth">
                    <span id="login" onclick="document.getElementById('modal').showModal()">Kirjaudu</span>
                </div>
            </div>

        </div>
    </nav>
    <dialog id="modal">
        <div class="close-btn" onclick="document.getElementById('modal').close()">×</div>
        <form id="loginForm" class="form-container active" method="post">
            <div class="modal-header">Kirjaudu</div>
            <div class="modal-body">
                <input type="email" name="loginEmail" placeholder="Email" required>
                <input type="password" name="loginPassword" placeholder="Salasana" required>
            </div>
            <div class="modal-footer">
                <button class="btn-primary" type="submit">Kirjaudu</button>
            </div>
            <div class="switch-form" onclick="document.getElementById('loginForm').classList.remove('active'); document.getElementById('registerForm').classList.add('active')">Ei tiliä? Rekisteröidy</div>
        </form>

        <form id="registerForm" class="form-container" method="post">
            <div class="modal-header">Rekisteröidy</div>
            <div class="modal-body">
                <input type="text" name="firstName" placeholder="Etunimi" required>
                <input type="text" name="lastName" placeholder="Sukunimi" required>
                <input type="email" name="registerEmail" placeholder="Email" required>
                <input type="password" name="registerPassword" placeholder="Salasana" required>
                <input type="password" name="registerPassword2" placeholder="Salasana 2" required>
            </div>
            <div class="modal-footer">
                <button class="btn-primary" type="submit">Rekisteröi</button>
            </div>
            <div class="switch-form" onclick="document.getElementById('registerForm').classList.remove('active'); document.getElementById('loginForm').classList.add('active')">On tilini? Kirjaudu</div>
        </form>
    </dialog>
</header>