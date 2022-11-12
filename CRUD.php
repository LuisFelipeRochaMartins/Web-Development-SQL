<?php
//include_once "index.php";

class CRUD{
    private $nome;

    private $sobrenome;

    private $telefone;


    public function getNome($nome){
        $this->nome = $nome;
    }
 
    public function getSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    public function getTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function setNome($nome){
        
        
    }
    
    public function insertContact($database){
        return"INSERT INTO $database VALUES($nome,$sobrenome,$telefone)";
    }

    public function deleteContact($database){
        return"DELETE FROM $database WHERE nome = $nome AND sobrenome = $sobrenome";
    }

    public function viewContact($database){
        return"SELECT * FROM $database";
    }
}