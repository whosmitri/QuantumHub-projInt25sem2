<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include './components/head.php'; ?>

    <link rel="stylesheet" href="../styles/formulario.css">

    <title>Cursos - QuantumHub</title>
</head>

<body>
    <?php include './components/header.php'; ?>

    <div id="main">
    <main>

        <section id="mainText">
            <h1>Descubra seu curso ideal!</h1>
            <p>Responda apenas algumas perguntas e descubra qual o melhor curso para você</p>
        </section>

        <div class="form-container">
            <form action="../config/salvar_formulario.php" method="POST">
                <div class="form-input">
                    <label>Área de interesse:</label>
                    <select name="area">
                        <option>Desenvolvimento</option>
                        <option>Dados</option>
                        <option>Cibersegurança</option>
                        <option>Mobile</option>
                        <option>Marketing</option>
                        <option>Cloud</option>
                    </select>
                </div>

                <div class="form-input">
                    <label>Nível:</label>
                    <select name="nivel">
                        <option>Iniciante</option>
                        <option>Intermediário</option>
                        <option>Avançado</option>
                    </select>
                </div>

                <div class="form-input">
                    <label>Objetivo:</label>
                    <input type="text" name="objetivo">
                </div>

                <button type="submit" class="btn form-btn">Enviar</button>
            </form>
        </div>
    
    </main>
    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>