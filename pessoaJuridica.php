<?php

require_once 'conexao.php';

try {

    $sql = "INSERT INTO pessoaJuridica (razao_social, cnpj, inscricao_estadual, data_abertura, ramo_atividade,
    responsavel, departamento, telefone, telefone_celular, email) 
    VALUES (:razao_social, :cnpj, :inscricao_estadual, :data_abertura, :ramo_atividade,
    :responsavel, :departamento, :telefone, :telefone_celular, :email)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':razao_social', $_POST['razao_social'], PDO::PARAM_STR);
    $stmt->bindParam(':cnpj', $_POST['cnpj'], PDO::PARAM_STR);
    $stmt->bindParam(':inscricao_estadual', $_POST['inscricao_estadual'], PDO::PARAM_STR);
    $stmt->bindParam(':data_abertura', $_POST['data_abertura'], PDO::PARAM_STR);
    $stmt->bindParam(':ramo_atividade', $_POST['ramo_atividade'], PDO::PARAM_STR);
    $stmt->bindParam(':responsavel', $_POST['responsavel'], PDO::PARAM_STR);
    $stmt->bindParam(':departamento', $_POST['departamento'], PDO::PARAM_STR);
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
