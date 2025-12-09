<?php
session_start(); 
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: index.php');
    exit;
}

require "banco.php"; // Dependência essencial

// Pega o id da URL, tratando para evitar Notice
$id = $_GET["id"] ?? null; 

r
if (!$id) {
    header('Location: lista.php');
    exit;
}

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
$sql->bindParam(":id", $id);
$sql->execute();

$usuario = $sql->fetch(PDO::FETCH_ASSOC);


if (!$usuario) {
    echo "Usuário não encontrado. <br><a href='lista.php'>Voltar à lista</a>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
</head>
<body>

<h2>Editar Usuário</h2>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $usuario["id"] ?>">

    <label>Usuário:</label>
    <input type="text" name="usuario" value="<?= $usuario["usuario"] ?>" required>

    <label>Nova Senha (opcional):</label>
    <input type="password" name="senha">

    <button type="submit">Atualizar</button>
</form>
<br>
<a href='lista.php'>Voltar à lista</a>

</body>
</html>