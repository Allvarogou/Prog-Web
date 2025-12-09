<?php
session_start(); 
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: index.php');
    exit;
}

require "banco.php"; 
$id = $_GET["id"] ?? null;


if (!$id) {
    header("Location: lista.php");
    exit;
}

$sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
$sql->bindParam(":id", $id);
$sql->execute();

header("Location: lista.php"); /
exit;
?>