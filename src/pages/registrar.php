<?php
require_once "../../config/db/conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    if (empty($email) || empty($password)) {
        $erro = "Preencha todos os campos";
    } else {
        // Verifica se usuário já existe
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $erro = "Usuário já cadastrado";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare(
                "INSERT INTO users (email, password) VALUES (?, ?)"
            );
            $stmt->bind_param("ss", $email, $hash);

            if ($stmt->execute()) {
                header("Location: login.php");
                exit;
            } else {
                $erro = "Erro ao cadastrar";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include './components/head.php'; ?>

    <link rel="stylesheet" href="../styles/login_registrar.css">

    <title>Registrar - QuantumHub</title>
</head>
<body>

    <div id="main">
    <main>
        <?php if (!empty($erro)) echo "<p style='color:red'>$erro</p>"; ?>

        <div class="form-container">
            <div class="left-form">
                <img src="../assets/images/login-img.svg">
            </div>
            <div class="right-form">
                <h1>Registre-se!</h1>
                <form method="POST">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Senha" required>
                    <button type="submit" class="btn form-btn">Registrar</button>
                </form>
                <a href="login.php">Já tenho conta</a>
            </div>
        </div>
    </main>
    </div>

    <?php include './components/footer.php'; ?>

</body>
</html>