<?php
require 'config.php';


$usuario = [];
$RG = filter_input(INPUT_GET, 'RG');
if($RG){
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE RG = :RG");
    $sql->bindValue(':RG', $RG);
    $sql->execute();

    if($sql->rowCount() > 0){
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
}
?>
<h1>Editar Usuario</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="RG" value="<?=$usuario['RG'];?>"/>
    <label>
        Nome: <input type="text" name="nome" value="<?=$usuario['nome'];?>"/>
    </label>
    <label>
        E-mail: <input type="text" name="email" value="<?=$usuario['email'];?>"/>
    </label>
    <input type="submit" value="Atualizar"/>
</form>