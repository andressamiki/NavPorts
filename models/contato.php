<?php 

class Contato{
    
    public $Contato_nm_nome , $Contato_ds_email , $Contato_ds_assunto , $Contato_ds_msg ;
    
    public function __construct( $Contato_nm_nome , $Contato_ds_email , $Contato_ds_assunto , $Contato_ds_msg )
    {
        
        $this->Contato_nm_nome=$Contato_nm_nome;
        $this->Contato_ds_email=$Contato_ds_email;
        $this->Contato_ds_assunto=$Contato_ds_assunto;
        $this->Contato_ds_msg=$Contato_ds_msg;
        
    }
    
}

?>