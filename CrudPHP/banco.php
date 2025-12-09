<?php


try {
    
    $host = 'localhost';
    $dbname = 'meubanco'; // <-- MUDAR PARA O SEU NOME DE BANCO DE DADOS
    $user = 'admin';        
    $pass = '';            

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
   
    echo "Erro de Conexão: Verifique seu banco e o XAMPP. Detalhes: " . $e->getMessage();
    exit;
}
?>