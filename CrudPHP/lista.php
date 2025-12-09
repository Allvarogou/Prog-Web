<?php
session_start(); 

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: index.php');
    exit;
}

require "banco.php"; 


$sql = $pdo->query("SELECT * FROM usuarios");


$usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<body>

<h2>Usuários cadastrados</h2>

<a href="cadastrar.php">Cadastrar novo</a> | <a href="logout.php">Sair (Logout)</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($usuarios as $u):  ?>
    <tr>
        <td><?= $u["id"] ?></td>
        <td><?= $u["usuario"] ?></td>
        <td>
            <a href="editar.php?id=<?= $u["id"] ?>">Editar</a>
            |
            <a href="excluir.php?id=<?= $u["id"] ?>" 
               onclick="return confirm('Excluir mesmo?')">
               Excluir
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>