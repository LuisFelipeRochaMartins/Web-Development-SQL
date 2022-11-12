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
        <a class="navbar-brand" href="list.php">Agenda</a>
        <a href="index.php" class="navbar-brand">Adicionar</a>
</nav>
    </div>
<div class="container">
    <h1 class="page-header text-center">Lista de Contatos</h1>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered   table-striped" style="margin-top:20px;">
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
                        echo "<table>";
                        foreach($listacontatos as $contato){
                            echo "<tr>";
                            echo "<td>".$contato['id']."</td><td>".$contato['nome']."</td><td>".$contato['sobrenome'].
                                 "</td><td>".$contato['telefone'];"</td><td>".$contato['telefone']."</td>";
                                        echo "<a href='editar.php?index=' class='btn btn-success btn-sm'>Editar</a>".
                                        "<a href='deletar.php?index=' class='btn btn-danger btn-sm'>Deletar</a>
                                    </td>
                                </tr>";  
                        }
                        echo "</table>";
                    }catch(PDOException $e){ // se qualquer erro acontecer printa o erro
                        print("Erro ao conectar com o banco de dados, favor verificar".$e->getMessage());
                        die();
                    }