<?php
$cursos = [
    "Desenvolvimento" => "Curso de Desenvolvimento Web Full Stack",
    "Dados" => "Curso de Ciência de Dados com Python",
    "Cibersegurança" => "Curso de Cibersegurança para Iniciantes",
    "Mobile" => "Curso de Desenvolvimento Mobile",
    "Marketing" => "Curso de Marketing Digital e SEO",
    "Cloud" => "Curso de Cloud Computing"
];

//$area = $_GET['area'];
$area = 'Cibersegurança';

$recomendado = $cursos[$area];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include './components/head.php'; ?>

    <link rel="stylesheet" href="../styles/recomendacao.css">

    <title>Recomendação - QuantumHub</title>
</head>

<body>
    <?php include './components/header.php'; ?>

    <div id="main">
    <main>

        <h1>Curso recomendado para você</h1>
        <h2><?= $recomendado ?></h2>

        <a href="comprar.php?curso=<?= urlencode($recomendado) ?>" class="btn main-btn">Comprar agora</a>
        <a href="cursos.php">Ver todos os cursos</a>

    </main>
    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>