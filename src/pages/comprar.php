<?php $curso = $_GET['curso']; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include './components/head.php'; ?>

    <link rel="stylesheet" href="../styles/compra.css">

    <title>Compra - QuantumHub</title>
</head>

<body>
    <?php include './components/header.php'; ?>

    <div id="main">
    <main>
        <div class="form-container">
            <div class="left-form">
                <h1>Finalizar Compra</h1>
                <p>Você está comprando: <strong><?= htmlspecialchars($curso) ?></strong></p>
            </div>

            <form class="right-form">
                <label>Nome completo</label>
                <input type="text">
                <label>Cartão</label>
                <input type="text">
                <button class="btn form-btn">Finalizar</button>
            </form>
        </div>
    </main>
    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>