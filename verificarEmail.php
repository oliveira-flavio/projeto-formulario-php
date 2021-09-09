<?php
require_once("conexao.php");

$email = $_POST["email"];

$stmt = $pdo->prepare("SELECT * FROM `pessoaFisica` WHERE `email` =?");
$stmt->execute([$email]);
$emailExist = $stmt->fetchColumn();

if ($emailExist) {
    echo "<span style='color:red'> E-mail já cadastrado. </span>";
} else {
    echo "<span style='color:green'>E-mail disponível para cadastro.</span>";
}

// $stmt = $pdo->prepare("SELECT * FROM `pessoaJuridica` WHERE `email` =?");
// $stmt->execute([$email]);
// $emailExist = $stmt->fetchColumn();

// if ($emailExist) {
//     echo "<span style='color:red'> E-mail já cadastrado. </span>";
// } else {
//     echo "<span style='color:green'>E-mail disponível para cadastro.</span>";
// }
