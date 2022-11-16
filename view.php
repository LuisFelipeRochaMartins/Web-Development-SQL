<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de Contatos</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="view.php">Agenda</a>
        <a href="form.html" class="navbar-brand">Adicionar</a>
</nav>
    </div>
<div class="container">
    <h1 class="page-header text-center">Lista de Contatos</h1>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Opções</th>
                </thead>
                <tbody>
                    <?php
                     include_once 'dbInfo.php';
                    try{
                        // cria conexão com o banco de dados
                        $connect = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
                        // montar consulta com o banco utilizando, a principio somente o código SQL, depois pretendo fazer OOP
                        $consulta = 'SELECT * FROM pessoas';
                        // executa a consulta
                        $comando = $connect->prepare($consulta);
                        // roda o comando
                        $comando->execute();
                        // pega o retorno da consulta
                        $listacontatos = $comando->fetchAll();
                        // foreach para exibir os valores do campo do banco de dados
                        foreach($listacontatos as $contato){    
                            echo"
                            <tr>
                            <td style='width:16%' >".$contato['nome']."</td><td style='width:20%'>".$contato['sobrenome']."</td><td style=width:3%;text-align:center;>".$contato['id'].
                            "</td><td style=width:25%>".$contato['email']."</td><td style=width:20%>".$contato['telefone']."</td><td>";
                            echo "<a href='formUpdate.php?id=$contato[id]'class='btn btn-success btn-sm'>Editar</a>".
                            "<a href='delete.php?id=$contato[id];' class='btn btn-danger btn-sm'>Deletar</a>".
                            "</td>
                            </tr>";
                        }
                        echo "</table>";
                    }catch(PDOException $e){ // se qualquer erro acontecer printa o erro
                        print("Erro ao conectar com o banco de dados, favor verificar".$e->getMessage());
                        die();
                    }