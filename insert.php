<?php

include_once 'dbInfo.php';

$nome = isset($_POST['nome'])?$_POST['nome']:"";
$sobrenome = isset($_POST['sobrenome'])?$_POST['sobrenome']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$telefone = isset($_POST['telefone'])?$_POST['telefone']:"";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO pessoas (nome, sobrenome,email,telefone)
  VALUES('$nome','$sobrenome','$email','$telefone')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

echo"
<script>
window.location.href='list.php'
</script>"; 
exit;
