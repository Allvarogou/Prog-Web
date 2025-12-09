<?php
require "banco.php";

/* busca todos os usuários */
$sql = $pdo->query("SELECT * FROM usuarios");

/* fetchAll() retorna uma lista com todos os registros */
$usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<body>

<h2>Usuários cadastrados</h2>

<a href="cadastrar.php">Cadastrar novo</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($usuarios as $u): ?>
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
