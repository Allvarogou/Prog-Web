<?php
require "banco.php";

$id      = $_POST["id"];
$usuario = $_POST["usuario"];
$senha   = $_POST["senha"];


if ($senha == "") {
    $sql = $pdo->prepare("UPDATE usuarios SET usuario = :user WHERE id = :id");
    $sql->bindParam(":user", $usuario);
    $sql->bindParam(":id", $id);
} else {
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $sql = $pdo->prepare("UPDATE usuarios SET usuario = :user, senha = :pass WHERE id = :id");
    $sql->bindParam(":user", $usuario);
    $sql->bindParam(":pass", $senhaHash);
    $sql->bindParam(":id", $id);
}

$sql->execute();

echo "Atualizado com sucesso!";
echo "<br><a href='lista.php'>Voltar à lista</a>";
