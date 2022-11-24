<?php

include_once 'dbInfo.php';
include_once 'view.php';

$banco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$consulta = "DELETE FROM pessoas WHERE id =".$_GET['id'];
$comando = $banco->prepare($consulta);
$comando->execute();


echo"
<script>
window.location.href='view.php'
</script>"; 
exit;   