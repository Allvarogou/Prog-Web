<?php
session_start(); 
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Usuário</title>
</head>
<body>

<h2>Cadastrar Usuário</h2>

<form action="salvar.php" method="POST">
    <label>Usuário:</label>
    <input type="text" name="usuario" required>

    <label>Senha:</label>
    <input type="password" name="senha" required>

    <button type="submit">Salvar</button>
</form>
<br>
<a href='lista.php'>Voltar à lista</a>

</body>
</html>