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
    <label>
        Telefone Celular: <input type="text" name="telefone_celular" value="<?=$usuario['tel_cel'];?>"/>
    </label>
    <label>
        Telefone Fixo: <input type="text" name="telefone_fixo" value="<?=$usuario['tel_fixo'];?>"/>
    </label>
    <label>
        Data Cadastro: <input type="date" name="data_cadastro" value="<?=$usuario['data_cadastro'];?>"/>
    </label>
    <label>
        Logradouro: <input type="text" name="logradouro" value="<?=$usuario['logradouro'];?>"/>
    </label>
    <label>
        Nome Logradouro: <input type="text" name="nome_logradouro" value="<?=$usuario['nome_logradouro'];?>"/>
    </label>
    <label>
        Numero: <input type="text" name="numero" value="<?=$usuario['numero'];?>"/>
    </label>
    <label>
        Cep: <input type="text" name="cep" value="<?=$usuario['CEP'];?>"/>
    </label>
    <label>
        Complemento: <input type="text" name="complemento" value="<?=$usuario['complemento'];?>"/>
    </label>
    <label>
        Bairro: <input type="text" name="bairro" value="<?=$usuario['bairro'];?>"/>
    </label>
    <label>
        Cidade: <input type="text" name="cidade" value="<?=$usuario['cidade'];?>"/>
    </label>
    <label>
        Estado: <input type="text" name="estado" value="<?=$usuario['estado'];?>"/>
    </label>
    <label>
        Tipo Usuario: <input type="text" name="tipo_usuario" value="<?=$usuario['tipo_usuario'];?>"/>
    </label>
    <label>
        Altura: <input type="text" name="altura" value="<?=$usuario['altura'];?>"/>
    </label>
    <label>
        Peso: <input type="text" name="peso" value="<?=$usuario['peso'];?>"/>
    </label>
    <input type="submit" value="Atualizar"/>
</form>