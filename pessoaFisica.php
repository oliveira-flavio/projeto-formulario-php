<?php

require_once 'conexao.php';

try {

    $sql = "INSERT INTO pessoaFisica (nome, cpf, rg, data_nascimento, escolaridade, genero, nome_mae, nome_pai,
    telefone, telefone_celular, email) 
    VALUES (:nome, :cpf, :rg, :data_nascimento, :escolaridade, :genero, :nome_mae, :nome_pai,
    :telefone, :telefone_celular, :email)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
    $stmt->bindParam(':cpf', $_POST['cpf'], PDO::PARAM_STR);
    $stmt->bindParam(':rg', $_POST['rg'], PDO::PARAM_STR);
    $stmt->bindParam(':data_nascimento', $_POST['data_nascimento'], PDO::PARAM_STR);
    $stmt->bindParam(':escolaridade', $_POST['escolaridade'], PDO::PARAM_STR);
    $stmt->bindParam(':genero', $_POST['genero'], PDO::PARAM_STR);
    $stmt->bindParam(':nome_mae', $_POST['nome_mae'], PDO::PARAM_STR);
    $stmt->bindParam(':nome_pai', $_POST['nome_pai'], PDO::PARAM_STR);
    $stmt->bindParam(':telefone', $_POST['telefone'], PDO::PARAM_STR);
    $stmt->bindParam(':telefone_celular', $_POST['telefone_celular'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);

    $stmt->execute();
    $newId = $pdo->lastInsertId();
    echo "Dados gravados com sucesso.";
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

unset($pdo);
