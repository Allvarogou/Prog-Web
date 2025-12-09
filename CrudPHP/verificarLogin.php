<?php 
session_start(); 

$usuario_valido = 'admin'; 
$senha_valida_plain = '123';


$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';


if ($usuario === $usuario_valido && $senha === $senha_valida_plain) {
    $_SESSION['logado'] = true; 
    $_SESSION['usuario'] = $usuario; 
    header('Location: lista.php'); 
    exit();

} else {
    echo "Login ou senha inválidos. <a href='index.php'>Tente novamente</a>.";
}
?>