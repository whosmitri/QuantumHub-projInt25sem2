<?php
include '../..db/conexao.php';

$area = $_POST['area'];
$nivel = $_POST['nivel'];
$objetivo = $_POST['objetivo'];

$sql = "INSERT INTO formularios (area_interesse, nivel, objetivo)
        VALUES ('$area', '$nivel', '$objetivo')";

if ($conn->query($sql)) {
    header("Location: recomendacao.php?area=$area&nivel=$nivel");
    exit;
} else {
    echo "Erro ao salvar!";
}
?>