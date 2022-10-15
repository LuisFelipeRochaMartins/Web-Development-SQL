<?php
    $index = $_GET['index'];
    $data = file_get_contents('contact.json');
    $data_array = json_decode($data);
    $row = $data_array[$index];
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editando Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <center>
<form method="POST">
    <a href="index.php">Voltar</a>
    <p>
        <label for="id">ID</label>
        <input type="text"
        id="id"
        name="id"
        value="<?php echo $row->id; ?>">
    </p>
    <p>
        <label for="firstname">nome</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo $row->nome; ?>">
    </p>
    <p>
        <label for="lastname">sobrenome</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo $row->sobrenome; ?>">
    </p>
    <p>
        <label for="address">Idade</label>
        <input type="text" id="address" name="address" value="<?php echo $row->idade; ?>">
    </p>
    <p>
        <label for="gender">Sexo</label>
        <input type="text" id="gender" name="gender" value="<?php echo $row->email; ?>">
    </p>
    <input type="submit" name="save" value="Save">
</form>
 
<?php
    if(isset($_POST['save'])){
        $input = array(
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'Surname' => $_POST['surname'],
            'Age' => $_POST['age'],
            'Email' => $_POST['email']
        );
        $data_array[$index] = $input;
        $data = json_encode($data_array, JSON_PRETTY_PRINT);
        file_put_contents('contact.json', $data);
 
        header('location: index.php');
    }
?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 </center>
</body>
</html>