<?php

include_once 'dbInfo.php';

$banco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

function delete($id){
    $consulta = "DELETE FROM pessoas WHERE id = '$id'";
    $comando = $connect->prepare($consulta);
}

echo"
<script>
window.location.href='view.php'
</script>"; 
exit;