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
                    <th>Idade</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Sexo</th>
                    <th>Opções</th>
                </thead>
                <tbody>
                    <?php
                        $data = file_get_contents('contact.json');
                        $data = json_decode($data);
                        $index = 0;
                        foreach($data as $row){
                            echo "
                                <tr>
                                    <td>".$row->nome."</td> 
                                    <td>".$row->sobrenome."</td>
                                    <td>".$row->numero."</td>
                                    <td>".$row->email."</td>
                                    <td>".$row->Telefone."</td>
                                    <td>".$row->$Sexo."</td>
                                    <td>
                                        <a href='editar.php?index=".$index."' class='btn btn-success btn-sm'>Editar</a>
                                        <a href='deletar.php?index=".$index."' class='btn btn-danger btn-sm'>Deletar</a>
                                    </td>
                                </tr>
                            ";
                             $index++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>