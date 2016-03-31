<?php 

class Acerto{
    
    public $id_categoria,$nm_class, $Usuario_id_usuario , $Pergunta_id_pergunta;
    
    public function __construct( $id_categoria,$Usuario_id_usuario , $Pergunta_id_pergunta )
    {
        $this->id_categoria = $id_categoria;
        $this->nm_class = "blondor";
        $this->Usuario_id_usuario = $Usuario_id_usuario;
        $this->Pergunta_id_pergunta = $Pergunta_id_pergunta;
    }
    
}

?>