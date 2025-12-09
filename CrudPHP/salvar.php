<?php
session_start(); 

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: index.php');
    exit;
}

require "banco.php"; 

$usuario = $_POST["usuario"] ?? null;
$senha   = $_POST["senha"] ?? null;


if (empty($usuario) || empty($senha)) {
    echo "Erro: Usuário e Senha são obrigatórios para cadastrar. <br><a href='cadastrar.php'>Voltar ao cadastro</a>";
    exit;
}


$senhaHash = password_hash($senha, PASSWORD_DEFAULT);


$sql = $pdo->prepare("INSERT INTO usuarios (usuario, senha) VALUES (:user, :pass)");


$sql->bindParam(":user", $usuario);
$sql->bindParam(":pass", $senhaHash);

$sql->execute();

echo "Usuário cadastrado com sucesso!";
echo "<br><a href='lista.php'>Voltar à lista</a>";
?>