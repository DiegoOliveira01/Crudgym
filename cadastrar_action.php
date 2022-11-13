<?php
require 'config.php';

$RG = filter_input(INPUT_POST, 'RG');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$telefone_celular = filter_input(INPUT_POST, 'telefone_celular');
$telefone_fixo = filter_input(INPUT_POST, 'telefone_fixo');
$data_cadastro = filter_input(INPUT_POST, 'data_cadastro');


if($RG && $nome && $email && $telefone_celular && $telefone_fixo && $data_cadastro){
    
    $sql = $pdo->prepare("INSERT INTO usuario (RG, nome, email, tel_cel, tel_fixo, data_cadastro) VALUES (:RG, :nome, :email, :telefone_celular, :telefone_fixo,  :data_cadastro)");
    $sql->bindvalue(':RG', $RG);
    $sql->bindvalue(':nome', $nome);
    $sql->bindvalue(':email', $email);
    $sql->bindvalue(':telefone_celular', $telefone_celular);
    $sql->bindvalue(':telefone_fixo', $telefone_fixo);
    $sql->bindvalue(':data_cadastro', $data_cadastro);
    $sql->execute();
    
    header("location: index.php");
    exit;
}else{
    header("Location: cadastrar.php");
    exit;
}

