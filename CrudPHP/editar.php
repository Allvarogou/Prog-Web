<?php
require "banco.php";

$id = $_GET["id"]; // pega o id da URL

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
$sql->bindParam(":id", $id);
$sql->execute();

$usuario = $sql->fetch(PDO::FETCH_ASSOC);
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

</body>
</html>
