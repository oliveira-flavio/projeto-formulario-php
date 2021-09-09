<?php

$host = "213.190.6.169";
$dbName = "u503861036_flavio";
$user = "u503861036_flavio";
$pass = "Flavio1234";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", "$user", "$pass");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar com o banco. " . $e->getMessage());
}
