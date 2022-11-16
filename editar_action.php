<?php
require 'config.php';


$RG = filter_input(INPUT_POST, 'RG');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
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
$tipo_usuario = filter_input(INPUT_POST, 'tipo_usuario');
$altura = filter_input(INPUT_POST, 'altura');
$peso = filter_input(INPUT_POST, 'peso');

if($RG && $nome && $email && $telefone_celular && $telefone_fixo && $data_cadastro && $logradouro && $nome_logradouro && $numero && $cep && $complemento && $bairro && $cidade && $estado && $tipo_usuario && $altura && $peso){
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, tel_cel = :telefone_celular, tel_fixo = :telefone_fixo, data_cadastro = :data_cadastro, logradouro = :logradouro,  nome_logradouro = :nome_logradouro, numero = :numero, CEP = :cep, complemento = :complemento, bairro = :bairro, cidade = :cidade, estado = :estado, tipo_usuario = :tipo_usuario, altura = :altura, peso = :peso WHERE RG = :RG");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':telefone_celular', $telefone_celular);
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
    $sql->bindvalue(':tipo_usuario', $tipo_usuario);
    $sql->bindvalue(':altura', $altura);
    $sql->bindvalue(':peso', $peso);
    $sql->bindValue(':RG', $RG);
    $sql->execute();
    
    header("Location: index.php");
}else{
    header("Location: index.php");
}