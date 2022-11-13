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
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
    <tr>
            <td><?=$usuario['RG'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="editar.php?RG=<?=$usuario['RG'];?>">[Editar]</a>
                <a href="excluir.php?RG=<?=$usuario['RG'];?>">[Excluir]</a>
            </td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="cadastrar.php">Cadastrar Usuario</a>