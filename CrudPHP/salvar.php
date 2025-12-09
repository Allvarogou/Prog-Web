<?php


require "banco.php"; 


$usuario = $_POST["usuario"];
$senha   = $_POST["senha"];


$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$sql = $pdo->prepare("INSERT INTO usuarios (usuario, senha) VALUES (:user, :pass)");


$sql->bindParam(":user", $usuario);
$sql->bindParam(":pass", $senhaHash);


$sql->execute();

echo "Usuário cadastrado com sucesso!";
echo "<br><a href='lista.php'>Voltar à lista</a>";
