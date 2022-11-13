<?php
require 'config.php';

$RG = filter_input(INPUT_GET, 'RG');

if($RG){
    $sql = $pdo->prepare("DELETE FROM usuario WHERE RG = :RG");
    $sql->bindValue(':RG', $RG);
    $sql->execute();
}

header("Location: index.php");

?>