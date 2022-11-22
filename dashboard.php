<?php
require'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");
if($sql->rowcount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/logo_domain-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/homepage.css">
    <link rel="stylesheet" href="styles/section.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a9f11940bf.js" crossorigin="anonymous"></script>

    <title>ACADEMIA</title>
</head>

<body>
    <div class="container_session">
        <nav class="navbar_main">
            <div class="pic_brand"></div>
            <span class="logo"></span>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="dashboard.php">Espaço do Cliente</a></li>
                <li><a href="./cadastrar.php">Junte-se a nós</a></li>
                <li><a href="#">Agendamento</a></li>
                <li><a href="pages/planos.html">Planos</a></li>
            </ul>
</div>
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
        <th>Tipo Usuario</th>
        <th>Altura</th>
        <th>Peso</th>
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
            <td><?=$usuario['tipo_usuario'];?></td>
            <td><?=$usuario['altura'];?></td>
            <td><?=$usuario['peso'];?></td>
            <td>
                <a href="editar.php?RG=<?=$usuario['RG'];?>">[Editar]</a>
                <a href="excluir.php?RG=<?=$usuario['RG'];?>">[Excluir]</a>
            </td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="cadastrar.php">Cadastrar Usuario</a>
</body>