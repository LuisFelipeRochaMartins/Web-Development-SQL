<?php
$nome = isset($_POST['nome'])?$_POST['nome']:'';
$sobrenome = isset($_POST['sobrenome'])?$_POST['sobrenome']:'';
$data = isset($_POST['date'])?$_POST['date']:''; 
$email = isset($_POST['email'])?$_POST['email']:'';
$parente = isset($_POST['checkbox'])?$_POST['checkbox']:'';

$dados = array('Nome'=>$nome,
'Sobrenome'=>$sobrenome,
'Data'=>$data,
"Email"=>$email, 
"Parente" =>$parente,);
$dados1 = file_get_contents('contact.json');
$vetor = json_decode($dados1, true);
$Array[] = $dados;

$caminho = fopen('contact.json', 'w+');

fwrite($caminho, json_encode($vetor));  
header('location : list.php')
?>