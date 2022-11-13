<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$telefone_celular = filter_input(INPUT_POST, 'telefone_celular');
$RG = filter_input(INPUT_POST, 'RG');


if($nome && $email && $telefone_celular && $RG){
    
    $sql = $pdo->prepare("INSERT INTO usuario (RG, nome, email, tel_cel) VALUES (:RG, :nome, :email, :telefone_celular)");
    $sql->bindvalue(':RG', $RG);
    $sql->bindvalue(':nome', $nome);
    $sql->bindvalue(':email', $email);
    $sql->bindvalue(':telefone_celular', $telefone_celular);
    $sql->execute();
    
    header("location: index.php");
    exit;
}else{
    header("Location: cadastrar.php");
    exit;
}

