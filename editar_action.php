<?php
require 'config.php';


$RG = filter_input(INPUT_POST, 'RG');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($RG && $nome && $email && $telefone_celular){
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, telefone_celular = :telefone_celular WHERE RG = :RG");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':telefone_celular', $telefone_celular);
    $sql->bindValue(':RG', $RG);
    $sql->execute();
    
    header("Location: index.php");
}else{
    header("Location: index.php");
}