<?php
require "banco.php";

$id = $_GET["id"];

$sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
$sql->bindParam(":id", $id);
$sql->execute();

header("Location: lista.php"); // redireciona
exit;
