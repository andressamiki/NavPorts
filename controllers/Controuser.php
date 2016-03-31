<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controuser extends CI_Controller {
    
    
    // as view do usuario quando logado começam aqui
    //sempre realizando o controle do acesso.
    public function configuracoes()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
    	    $this->load->view('config',$this->cabecalho->user());
    	    $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
    
    public function painel()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
    	    $this->load->view('painel',$this->cabecalho->user());
    	    $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
    
    public function modo_jogo()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->view('modo-jogo');
            $this->load->view('footer');
        }else
        {
            redirect('Acesso-Restrito');
        }
    }
    
    public function erro()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->view('erro');
            $this->load->view('footer');
        }else
        {
            redirect('Acesso-Restrito');
        }
    }
    
    public function sucesso()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->view('sucesso');
            $this->load->view('footer');
        }else
        {
            redirect('Acesso-Restrito');
        }
    }
    
     public function recupSenha()
    {
            $this->cabecalho->head();
            $this->load->view('rec_senha');
            $this->load->view('footer');
        
    }
    
    public function perguntaAle()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
           
            $this->load->view('pergunta');
            $this->load->view('footer');
        }else
        {
            redirect('Acesso-Restrito');
        }
    }
    
    public function questao($id,$id2)
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->model('model');
		    $m = $this->model;
		    $cont = $m->searchAllPerg2($id);
		    $cont1 = $m->searchAllCat2($id2);
		    $cont2 = $m->searchAllAlt($id);
		    $data['perg'] = $cont;
		    $data['cat'] = $cont1;
		    $data['alt'] = $cont2;
            $this->load->view('questao',$data);
            $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
    
    public function certoErrado($tipo , $idperg , $idcat)
    {
            if($tipo === "0"){
                
                require_once APPPATH."models/acerto.php";
                $this->load->model('model');
		        $m = $this->model;
		        $id = $m->pegaIdUser();
		        $xd = $m->verifCerto($id,$idperg);
		        //print_r($xd);
		        if($xd === "0"){
                    $m->insertAcerto(new Acerto($idcat , $id , $idperg));
                    redirect("sucesso");
                
                }else{
                    
                    redirect("sucesso");
               }
                
            }else
            {
                redirect("erro");
            }
		    
        
    }
    
    public function escolhaPerg( $id )
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->model('model');
		    $m = $this->model;
		    $cont = $m->searchAllPergCat($id);
		    $x = $m->pegaIdUser(); 
		    $cont1 = $m->searchAllCat2($id);
		    $cont2 = $m->searchAllAcerto($id,$x);
		    $data['perg'] = $cont;
		    $data['cat'] = $cont1;
		    $data['certo'] = $cont2;
		    $this->load->view('escolha-pergunta',$data);
            $this->load->view('footer');
            //print_r($cont2);
        }else
        {
             redirect('Acesso-Restrito');
        }
        
        
        
		
    }
    
    public function relFinal()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            // Recebe a String em modelo Json com as perguntas e respostas do Jogador
            $perg_resp = isset($_POST['perg_resp']) ? $_POST['perg_resp'] : null;
            // Converte a String para Json
            $perg_resp = json_decode( sprintf($perg_resp,"\""));
            
            
            $this->load->model("Model");
            $model = $this->Model;
            
            // conta a quantidade de perguntas respondidas
            $data['qtdeRespondidas'] = count( $perg_resp->perguntas );
            
            // inicializa os acumuladores de certas e erradas
            $certas = 0;
            $erradas = 0;
           
            // percorre todas as perguntas respondidas
            foreach($perg_resp->perguntas as $value){
                // 
                $perg = $model->searchAllPerg2($value->id_pergunta);
                $resp = $model->searchAllAlt($value->id_pergunta);
               
                $respostaCerta = false;
                foreach($resp as $val){
                   
                    if($val['id_alternativa'] == $value->id_resposta 
                        && $val['tipo'] == 0){
                        $respostaCerta = true;
                        break;
                    }
                }
                    
                $data['perguntas'][] = array(
                    "nm_pergunta" => $perg[0]->nm_pergunta,
                    "acerto" => $respostaCerta
                );
                
                if($respostaCerta) {
                    $certas++;
                }else{
                    $erradas++;
                }
            }
            $data['certas'] = $certas;
            $data['erradas'] = $erradas;
           
            $this->cabecalho->head();
            $this->load->view('relatorio_final_VITOR',$data);
            $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
    
    public function relFinal2(){
        $this->cabecalho->head();
        $this->load->view('relatorio_final');
        $this->load->view('footer');
    }
    
    public function erroEmail($data)
    {
        $this->cabecalho->head();
        $this->load->view('erroEmail',$data);
        $this->load->view('footer');
        
    }
    
    public function error()
    {
        $this->cabecalho->head();
        $this->load->view("erro404");    
        $this->load->view('footer');
    }
    
    public function questAle()
    {
        $this->cabecalho->head();
        $this->load->view("questao_ale");    
        $this->load->view('footer');
    }
    
    public function ajuda()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->cabecalho->head();
            $this->load->view('ajuda');
            $this->load->view('footer');
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
    
// as views do usuario terminan aqui******************************************************************************************

    
    //função que insere o usuario no banco de dados e verifica se o email a se cadastrar ja esta no banco.
    public function InsUser()
    {
        $empresa = $_POST["empresa"];
        $nome = $_POST["nome"];
        $email2 = $_POST["email2"];
        $senha2 = $_POST["senha2"];
	    $this->load->model("model");
        $ak = $this->model->verifEmail($email2);
		if( $ak === "0")
		{
		    require_once APPPATH."models/caduser.php";
		    $this->load->model('model');
		    $m = $this->model;
		    $m->insertuser(new UsuarioComum($empresa,$nome,$email2,$senha2));
		    redirect('login');
		}else
		{
		    $data['email']=$email2;
		    $this->erroEmail($data);
		}
		
    }
   
    public function categorias()
    {
		require_once APPPATH."models/categoria.php";
		$this->load->model('model');
		$m = $this->model;
		$cont = $m->searchAllCat();
		$data['cats'] = $cont;
		$this->cabecalho->head();
		$this->load->view('categorias',$data);
		$this->load->view('footer');
	}
	
	//Função que altera a senha do usuario.
	public function alteraSenha()
	{
	     $senha_new = $_POST["senha"];
	     $senha_velha = $_POST["senha_antiga"];
	     $this->load->model("model");
         $xd = $this->model->verifSenha($senha_velha,$senha_new);
         if($xd === 0){
             
             redirect("configuracoes");
         }else{
             
             redirect("painel-user");
         }
	 
	}
	
	public function alteraEmail()
	{
	     $email_antigo = $_POST["email_antigo"];
	     $email_novo = $_POST["email_novo"];
	     $this->load->model("model");
	     $yd = $this->model->verifEmail($email_novo);
	     if($yd === "0"){
         $xd = $this->model->verifEmail($email_antigo);
         if($xd === "1")
         {
             $this->model->trocaEmail($email_novo);
             $this->session->set_userdata("_EMAIL", $email_novo);
             redirect("configuracoes");
                     
         }else
         {
            redirect("home");
            
         }}else
         {
            echo "<h1>"."ESTE EMAIL JA FOI CADASTRADO EM NOSSA BASE DE DADOS"."</h1>";    
         }
	 
	}
	
	public function alteraEmpresa()
	{
	     $empresa_antiga = $_POST["empresa_antiga"];
	     $empresa_nova = $_POST["empresa_nova"];
	     $this->load->model("model");
         $xd = $this->model->getEmpresa();
         //print_r($xd);
         if($xd === $empresa_antiga)
         {
             $this->model->trocaEmpresa($empresa_nova);
             redirect("configuracoes");
                     
         }else{
            redirect("home");
            //echo $xd;
         }
	 
	}
	
	//Esta função pega o email do usuario e envia por email a senha dele
	public function enviaSenha()
	{
	    $senha = $_POST["email"];
	    $this->load->model("model");
        $xx = $this->model->pegaSenha($senha);
        if(count($xx) == 1){
            $dados = $xx[0];
            //print_r($dados);
            
            $this->load->library('email');
            $this->email->from('robertoradical9@gmail.com');
            $this->email->to($dados['ds_email']);
            $this->email->subject('NavPorts - Recuperação de Senha');
            $this->email->message($dados['nm_usuario'].' sua senha é '.$dados['ds_senha']);
            
            $this->email->send();
            //echo $this->email->print_debugger();
             
            redirect('home');
        }else
        {
            redirect('recupera-senha');
        }
	}
	
	public function selPerguntas($id){
	    $this->load->model("model");
        $xd = $this->model->getPerguntas($id);
        $result = (int)$xd;
        $data['xor'] = $result;
	    return($data);
	}
	
	
	/**
	 * 
	 * 
	 * @param String 
	 */
	public function webServiceRandomSearch(){
	    $param = $this->input->post('parametro')?:"68,67,92";
	    $parametro = explode(',',$param);
	    
	    // CARREGAR MODEL
	    $this->load->model('model');
	    $perguntas = $this->model->searchAllPerg();
        
	    foreach($parametro as $par){
	        for ($i=0; $i< count($perguntas)-1; $i++) {

	            if(isset($perguntas[$i]) && $perguntas[$i]->id_pergunta == $par){
	                unset($perguntas[$i]);
	            }
	        }
	    }
	    srand( (float)microtime()*1000000 );
	    shuffle($perguntas);
	    $per = array_rand($perguntas,3);
	    
	    echo json_encode($perguntas[0]);
	    
	}
	public function webServiceGetAnswer(){
	    $idperg = $this->uri->segment(3);
	    if(!isset($idperg) ){
	        $aux = array(
	            "erro" => "Sem o ID da pergunta!"
	        );
	        echo json_encode($aux);
	    }else{
	        // CARREGAR MODEL
	        $this->load->model('model');
	        $resposta = $this->model->searchAllAlt($idperg);
	        
	        echo json_encode($resposta);
	    }
	}
	
	
	public function aleatorio()
    {
        if( $this->usuario->tipoUser() != 2 )
        {
            $this->load->view('aleatorio',$this->cabecalho->user());
    	    
        }else
        {
             redirect('Acesso-Restrito');
        }
    }
	
	
}

?>