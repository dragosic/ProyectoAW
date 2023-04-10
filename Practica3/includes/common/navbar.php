<?php

require_once 'includes/config.php';

$current_page = basename($_SERVER['PHP_SELF']);
$logoPath = 'images/logo.png';
$menu = array(
    "index.php" => 'Inicio',
    "products.php" => 'Productos',
    "forum.php" => 'Foro',
    "events.php" => 'Eventos',
    "contact.php" => 'Contacto',
    "information.php" => 'Información'
);
?>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="<?= $logoPath ?>" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                <?php foreach ($menu as $key => $value) : ?>
                    <li class="nav-item">
                        <a class="nav-link<?= $key == $current_page ? ' active' : '' ?>" href="<?= $key ?>"><?= $value ?></a>
                    </li>
                <?php endforeach ?>
            </ul>

            <?php if (isset($_SESSION["user"])) : ?>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hola, <?= $_SESSION["user"]->getName() ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Cuenta</a></li>
                        <li><a class="dropdown-item" href="#">Pedidos</a></li>
                        <li><a class="dropdown-item" href="#">Lista de deseos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            <?php else : ?>
                <form action="login.php">
                    <button class="btn btn-outline-primary m-1" type="submit">Iniciar sesión</button>
                </form>
                <form action="register.php">
                    <button class="btn btn-primary m-1" type="submit">Registrarse</button>
                </form>
            <?php endif ?>
        </div>
    </div>
</nav>