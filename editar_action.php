<?php
require 'config.php';


$RG = filter_input(INPUT_POST, 'RG');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($RG && $nome && $email){
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email WHERE RG = :RG");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':RG', $RG);
    $sql->execute();
    
    header("Location: index.php");
}else{
    header("Location: index.php");
}