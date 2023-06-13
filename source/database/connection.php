<?php

$dbHost = 'localhost';  
$dbName = 'comfica';  
$dbUsername = 'root'; 
$dbPassword = '';  

$connection;

try {
    $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Conexão com o banco de dados estabelecida com sucesso!';
} catch (PDOException $e) {
    echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
}
