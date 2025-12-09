<?php
session_start(); 
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: index.php');
    exit;
}

require "banco.php"; 
$id      = $_POST["id"] ?? null;
$usuario = $_POST["usuario"] ?? null;
$senha   = $_POST["senha"] ?? ""; 
if (empty($id) || empty($usuario)) {
    echo "Erro: ID e Usuário são obrigatórios para atualização. <br><a href='lista.php'>Voltar à lista</a>";
    exit;
}

if (empty($senha)) {
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

?>