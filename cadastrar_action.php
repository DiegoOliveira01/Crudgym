<?php
require 'config.php';

$RG = filter_input(INPUT_POST, 'RG');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$telefone_celular = filter_input(INPUT_POST, 'telefone_celular');
$telefone_fixo = filter_input(INPUT_POST, 'telefone_fixo');
$data_cadastro = filter_input(INPUT_POST, 'data_cadastro');
$logradouro = filter_input(INPUT_POST, 'logradouro');
$nome_logradouro = filter_input(INPUT_POST, 'nome_logradouro');
$numero = filter_input(INPUT_POST, 'numero');
$cep = filter_input(INPUT_POST, 'cep');
$complemento = filter_input(INPUT_POST, 'complemento');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');


if($RG && $nome && $email && $telefone_celular && $telefone_fixo && $data_cadastro && $logradouro && $nome_logradouro && $numero && $cep && $complemento && $bairro && $cidade && $estado){
    
    $sql = $pdo->prepare("INSERT INTO usuario (RG, nome, email, tel_cel, tel_fixo, data_cadastro, logradouro, nome_logradouro, numero, CEP, complemento, bairro, cidade, estado) VALUES (:RG, :nome, :email, :telefone_celular, :telefone_fixo,  :data_cadastro, :logradouro, :nome_logradouro, :numero, :cep, :complemento, :bairro, :cidade, :estado)");
    $sql->bindvalue(':RG', $RG);
    $sql->bindvalue(':nome', $nome);
    $sql->bindvalue(':email', $email);
    $sql->bindvalue(':telefone_celular', $telefone_celular);
    $sql->bindvalue(':telefone_fixo', $telefone_fixo);
    $sql->bindvalue(':data_cadastro', $data_cadastro);
    $sql->bindvalue(':logradouro', $logradouro);
    $sql->bindvalue(':nome_logradouro', $nome_logradouro);
    $sql->bindvalue(':numero', $numero);
    $sql->bindvalue(':cep', $cep);
    $sql->bindvalue(':complemento', $complemento);
    $sql->bindvalue(':bairro', $bairro);
    $sql->bindvalue(':cidade', $cidade);
    $sql->bindvalue(':estado', $estado);
    $sql->execute();
    
    header("location: index.php");
    exit;
}else{
    header("Location: cadastrar.php");
    exit;
}

