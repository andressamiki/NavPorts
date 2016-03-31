<?php

class Caduser{
    
    public $nome,$email,$senha;
    
    public function __construct($nome,$email,$senha){
        $this->nome = $nome ;
        $this->email = $email ;
        $this->senha = $senha ;
    }
}

class Administrador extends Caduser{
    public $telefone;
    
    public function __construct($telefone,$nome,$email,$senha){
        parent::__construct($nome,$email,$senha);
        $this->telefone = $telefone;
    }
} 

class UsuarioComum extends Caduser{
    public $empresa;
    
    public function __construct($empresa,$nome,$email,$senha){
        parent::__construct($nome,$email,$senha);
        $this->empresa = $empresa;
    }
}

?>