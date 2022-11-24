<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de Contatos</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="view.php">Agenda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="form.html">Adicionar</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Insira aqui" aria-label="Search">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
<div class="page-header text-center">
    <h1>Lista de Contatos</h1>
</div> 
    <div class ="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered">
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
                    }?>
            </div>
        </div>
    </div>
</div>