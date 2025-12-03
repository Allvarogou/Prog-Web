<?php 
session_start(); 

$usuario_valido = 'admin'; // Usuário válido pré-definido
$senha_valida_plain = '123';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario === $usuario_valido && $senha === $senha_valida_plain) {
    $_SESSION['logado'] = true; 
    $_SESSION['usuario'] = $usuario; // Armazena o usuário na sessão
    header('Location: lista.php'); // Redireciona para a página que precisa do login
    exit();

} else {
    echo "Login ou senha inválidos. <a href='index.php'>Tente novamente</a>.";
}