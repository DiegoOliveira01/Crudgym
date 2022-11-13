<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

if($nome && $email){
    
    $sql = $pdo->prepare("INSERT INTO usuario (nome, email) VALUES (:nome, :email)");
    $sql->bindvalue(':nome', $nome);
    $sql->bindvalue(':email', $email);
    $sql->execute();
    
    header("location: index.php");
    exit;
}else{
    header("Location: cadastrar.php");
    exit;
}

