<?php
require'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");
if($sql->rowcount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>Listagem De usuarios</h1>

<table border="1">
    <tr>
        <th>RG</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone Celular</th>
        <th>Telefone Fixo</th>
        <th>Data Cadastro</th>
        <th>Logradouro</th>
        <th>Nome Logradouro</th>
        <th>Numero</th>
        <th>CEP</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
    <tr>
            <td><?=$usuario['RG'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td><?=$usuario['tel_cel'];?></td>
            <td><?=$usuario['tel_fixo'];?></td>
            <td><?=$usuario['data_cadastro'];?></td>
            <td><?=$usuario['logradouro'];?></td>
            <td><?=$usuario['nome_logradouro'];?></td>
            <td><?=$usuario['numero'];?></td>
            <td><?=$usuario['CEP'];?></td>
            <td><?=$usuario['complemento'];?></td>
            <td><?=$usuario['bairro'];?></td>
            <td><?=$usuario['cidade'];?></td>
            <td><?=$usuario['estado'];?></td>
            <td>
                <a href="editar.php?RG=<?=$usuario['RG'];?>">[Editar]</a>
                <a href="excluir.php?RG=<?=$usuario['RG'];?>">[Excluir]</a>
            </td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="cadastrar.php">Cadastrar Usuario</a>