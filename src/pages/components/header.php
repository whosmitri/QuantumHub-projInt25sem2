
<?php
// define a página atual (ex: index.php, cursos.php)
$paginaAtual = basename($_SERVER['PHP_SELF']);

require_once __DIR__ . '/src/config/base_url.php';
?>

<header>
    <a class="logo" href="<?= BASE_URL ?>/index.php">QuantumHub</a>

    <nav>
        <a href="<?= BASE_URL ?>/index.php" class="<?= $paginaAtual == 'index.php' ? 'active' : '' ?>">Home</a>
        <a href="<?= BASE_URL ?>/src/pages/cursos.php" class="<?= $paginaAtual == 'cursos.php' ? 'active' : '' ?>">Cursos</a>
        <a href="<?= BASE_URL ?>/src/pages/sobre.php" class="<?= $paginaAtual == 'sobre.php' ? 'active' : '' ?>">Sobre Nós</a>
    </nav>

    <a href="login.php">
        <button class="btn-login" type="button">Entrar</button>
    </a>
</header>
