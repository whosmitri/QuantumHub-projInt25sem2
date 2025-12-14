<?php
$cursos = [
    "Desenvolvimento" => "Curso de Desenvolvimento Web Full Stack",
    "Dados" => "Curso de Ciência de Dados com Python",
    "Cibersegurança" => "Curso de Cibersegurança para Iniciantes",
    "Mobile" => "Curso de Desenvolvimento Mobile",
    "Marketing" => "Curso de Marketing Digital e SEO",
    "Cloud" => "Curso de Cloud Computing"
];

$area = $_GET['area'];

$recomendado = $cursos[$area];
?>

<h1>Curso recomendado para você</h1>
<h2><?= $recomendado ?></h2>

<a href="comprar.php?curso=<?= urlencode($recomendado) ?>">Comprar agora</a>
<br>
<a href="cursos.php">Ver todos os cursos</a>