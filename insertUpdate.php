<?php

include_once 'dbInfo.php';
include_once 'formUpdate.php';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $sql = "UPDATE pessoas
  SET nome='". $_POST['nome']. "', sobrenome='". $_POST['sobrenome'] ."', email='". $_POST['email']. "', telefone='". $_POST['telefone']."'
  WHERE id =".$_POST['id'];
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

//echo"
//<script>
//window.location.href='view.php'
//</script>"; 
//exit;