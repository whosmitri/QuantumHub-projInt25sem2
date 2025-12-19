<?php
/*session_start();
require_once "../../config/db/conexao.php";*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    $stmt = $conn->prepare(
        "SELECT id, password FROM users WHERE email = ?"
    );
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user || !password_verify($password, $user["password"])) {
        $erro = "Email ou senha inválidos";
    } else {
        $_SESSION["user_id"] = $user["id"];
        header("Location: ../../index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include './components/head.php'; ?>

    <link rel="stylesheet" href="../styles/login_registrar.css">

    <title>Login - QuantumHub</title>
</head>
<body>

    <?php include './components/header.php'; ?>

    <div id="main">
    <main>
        <?php if (!empty($erro)) echo "<p style='color:red'>$erro</p>"; ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

        <a href="registrar.php">Criar conta</a>
    </main>
    </div>

    <?php include './components/footer.php'; ?>

</body>
</html>
