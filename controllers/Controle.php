<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controle extends CI_Controller {
    
    public function __construct()
    {
        
        parent::__construct();
    }
    
    public function home(){
        
        $this->cabecalho->head();
        $this->load->view('index',$this->usuario->redictUser());
        $this->load->view('footer');
    }
    
    public function contato(){
        $this->cabecalho->head();
        $this->load->view('contato');
        $this->load->view('footer');
    }
    
    public function sobre(){
        $this->cabecalho->head();
        $this->load->view('sobre');
        $this->load->view('footer');
    }
    
    public function login()
    {
        $this->cabecalho->head();
        $this->load->view('login');
        $this->load->view('footer');
    }
    
    public function creditos()
    {
        $this->cabecalho->head();
        $this->load->view('creditos');
        $this->load->view('footer');
    }
   
    public function erroAcess(){
        $this->cabecalho->head();
        $this->load->view('erroAcesso');
        $this->load->view('footer');
    }
    
     
    
    public function validaLogin(){
    	$email = $_POST["email1"];
        $senha = $_POST["senha1"];
        $this->load->model("model");
        $usr = $this->model->getUser($email,$senha);
        if($usr !== false){
            if($usr === "admin"){
                $this->session->set_userdata("_ID", "admin");
                redirect("painel-admin"); 
            }else{
             	$this->session->set_userdata("_ID", "usuario"); 
             	$this->session->set_userdata("_EMAIL", $email);
             	
             	
             	redirect("painel-user"); 
        	}
        }else{
            redirect("login");
        }
        
    }
        
    public function logoutuser(){
        $this->session->unset_userdata("_ID");
        $this->session->unset_userdata("_EMAIL");
        redirect("home");
    }
    
    public function logoutadmin(){
        $this->session->unset_userdata("_ID");
        redirect("home");
    }
    
   

    //Função que insere no banco de dados 
    public function InsCont(){
		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$assunto = $this->input->post('assunto');
		$msg = $this->input->post('msg');
		require_once APPPATH."models/contato.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insert(new Contato($nome,$email,$assunto,$msg));
		redirect("home");
		
    }
   
   /*public function chave(){
       $key = "jdf";
       $hmac_key = "DCJ";
       $keyy = hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
      
       $ciphertext="MARICOTA";
       $message = $this->encryption->encrypt(
        $ciphertext,
        array(
                'cipher' => 'blowfish',
                'mode' => 'cbc',
                'key' => $key,
                'hmac_digest' => 'sha256',
                'hmac_key' => $hmac_key
              )
        );
        $boster = $this->encryption->decrypt(
        $message,
        array(
                'cipher' => 'blowfish',
                'mode' => 'cbc',
                'key' => $key,
                'hmac_digest' => 'sha256',
                'hmac_key' => $hmac_key
              )
        );
        
        echo $message."<br>";
        echo $boster."<br>";
        echo $keyy."<br>";
        echo strlen($message);
   }

    /*public function minimo(){
        $passwd = "jo1166";
        $gerar = md5($passwd);
        echo $gerar;
        
    }*/

}
?>