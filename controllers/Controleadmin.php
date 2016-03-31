<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controleadmin extends CI_Controller {

    public function cadastra(){
    	if($this->usuario->tipoUser() === 0)
    	{
    		$this->cabecalho->head();
    		$this->load->view('cadastraadmin');
    		$this->load->view('footer');
    		
    	}else{
    		 redirect('Acesso-Restrito');
    	}
    		
    }
    
    
    public function cadastraCat(){
    	if($this->usuario->tipoUser() === 0)
    	{
    		$this->cabecalho->head();
    		$this->load->view('cadastracategoria');
    		$this->load->view('footer');
    	}else{
    		 redirect('Acesso-Restrito');
    	}
    }
    
    public function alteraperg()
    {
    	if($this->usuario->tipoUser() === 0)
    	{
    		require_once APPPATH."models/pergunta.php";
			$this->load->model('model');
			$id = $this->input->post("categoria");
			$m = $this->model;
			$cont = $m->searchAllCat_Perg($id);
			$cat = $m->searchAllAlter();
			$data['perg'] = $cont;
			$data['alter'] = $cat;
			//print_r($cont);
			$this->cabecalho->head();
    		$this->load->view('alterapergunta',$data);
    		$this->load->view('footer');
    	}else{
    		 redirect('Acesso-Restrito');
    	}
    }
    
     public function alteraperg2()
    {
    	if($this->usuario->tipoUser() === 0)
    	{
    		$this->load->model('model');
			$m = $this->model;
			$cont = $m->searchAllCat();
			$data['cats'] = $cont;
			
			//print_r($cont);
			$this->cabecalho->head();
    		$this->load->view('alterapergunta2',$data);
    		$this->load->view('footer');
    	}else{
    		 redirect('Acesso-Restrito');
    	}
    }
    
    
    
    public function alteracat()
    {
    	if($this->usuario->tipoUser() === 0)
    	{	
    		require_once APPPATH."models/categoria.php";
			$this->load->model('model');
			$m = $this->model;
			$cont = $m->searchAllCat();
			$data['cat'] = $cont;
			$this->cabecalho->head();
    		$this->load->view('alteracategoria',$data);
    		$this->load->view('footer');
    	}else
    	{
    		 redirect('Acesso-Restrito');
    	}
    }
    
    public function cadastroCat(){
        require_once APPPATH."models/categoria.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insertCat(new Categoria($_POST['nome']));
		redirect('cadastra-categoria');
		
    }
    
    
    
    
    public function cadastro(){
        require_once APPPATH."models/caduser.php";
		$this->load->model('model');
		$m = $this->model;
		$yd = $this->model->verifEmail($_POST['email']);
		if($yd === "0")
		{
			$m->insertadmin(new Administrador($_POST['telefone'],$_POST['nome'],$_POST['email'],$_POST['senha']));
			redirect('painel-admin');
		}else
		{
			echo "<h1>"."ESTE EMAIL JA FOI CADASTRADO EM NOSSA BASE DE DADOS"."</h1>"; 	
		}
	}
    
    public function cadastroPerg(){
        require_once APPPATH."models/pergunta.php";
		$this->load->model('model');
		$m = $this->model;
		
		$imagem = $_FILES["img_perg"]['name'];
		$dir = $_SERVER['DOCUMENT_ROOT'].'/static/Pergunta';//Diretorio onde serão salvas as imagems
		$ext = pathinfo($imagem, PATHINFO_EXTENSION);//Pega a extensão da imagem.
		$nm_img = $m->getIdImg() + 1;//Pega o ultimo id da tabela imagem acrecenta mais 1 e da para nome da proxima imagem.
		$nm_img_final = $nm_img.".".$ext; 
		
		$m->insertPerg(new Alternativas($_POST['categoria'],$_POST['nome'],$_POST['correta']));
		$m->insertPerg2(new Alternativas2($_POST['nome'],$_POST['incorreta1']));
		$m->insertPerg2(new Alternativas2($_POST['nome'],$_POST['incorreta2']));
		$m->insertPerg2(new Alternativas2($_POST['nome'],$_POST['incorreta3']));
		
		$m->insertImg(new Imagem($nm_img_final,$_POST['fonte']));
		move_uploaded_file($_FILES["img_perg"]['name'], $dir."/".$nm_img_final);
		
		$this->cadastraPerg();
    }
    
    // Função que salva a imagem no diretorio.
    public function salvaImg($imagem,$nm_img_final){
    	
    	
       	
    	//$this->imgConverter($nome_img);//chama a função abaixo para o resize da imagem.
    }
    
    //Esta função pega a imagem salva e modifica o tamanho da mesma.
    public function imgConverter($nm_img_final){
		
		$config['image_library'] = 'gd2';
		$config['source_image'] = $_SERVER['DOCUMENT_ROOT'].'/static/img_perg/'.$nm_img_final;
		$config['width']         = 500;
		$config['height']       = 250;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
	}
    
    
    public function cadastraPerg()
    {
    	if($this->usuario->tipoUser() === 0)
    	{	
			require_once APPPATH."models/categoria.php";
			$this->load->model('model');
			$m = $this->model;
			$cont = $m->searchAllCat();
			$data['cats'] = $cont;
			$this->cabecalho->head();
			$this->load->view('cadastrapergunta',$data);
			$this->load->view('footer');
    	}else
    	{
    		 redirect('Acesso-Restrito');
    	}
	}
	
	public function deletarcat($id){
		$this->load->model('model');
		if ($this->model->deleteCat($id)) {
			redirect('altera-categoria');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}
	
	public function deletarperg($id){
		$this->load->model('model');
		if ($this->model->deletePerg($id)) {
			redirect('escolha-categoria');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}
	
	public function alterarcat($id){
		$this->load->model('model');
		$m = $this->model;
		$m->altereCate($_POST['cat'],$id);
		redirect('escolha-categoria');
		
	}
	
	public function alterarperg($id){
		$this->load->model('model');
		$m = $this->model;
		$perg = $this->input->post('perg');
		$m->alterePerg($perg,$id);
		redirect('escolha-categoria');
		
	}
	
	public function alteraralter($id){
		$this->load->model('model');
		$m = $this->model;
		$alter = $this->input->post('alter');
		$m->altereAlter($alter,$id);
		redirect('escolha-categoria');
		
	}
	
	
	
	
}

?>