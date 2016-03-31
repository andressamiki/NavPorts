<?php

class Model extends CI_Model{
    
    public $id;
    //Função que insere os contatos no banco de dados.
    public function insert (Contato $cont){
        $this -> db -> insert ('Contato' , $cont ) ;
    }
    
    
    public function insertCat (Categoria $cont){
        $this->db->insert('Categoria' , $cont ) ;
    }
    
    public function insertAcerto(Acerto $cont){
        $this->db->insert('RespostaUsuario' , $cont ) ;
    }
    
    public function searchAllCat(){
        return $this->db->get('Categoria')->result();
    }
    
    public function searchAllCat_Perg($id){
        $this->db->select('*');    
        $this->db->from('Pergunta');
        $this->db->where('Pergunta.id_categoria',$id);
        $this->db->join('Categoria', 'Pergunta.id_categoria = Categoria.id_categoria');
        $query = $this->db->get()->result_array();
        return($query);
    }
    
    
    public function searchAllPerg(){
        return $this->db->get('Pergunta')->result();
    }
    
    public function searchAllPerg2($codigo){
        $this->db->where('id_pergunta',$codigo);
        return $this->db->get('Pergunta')->result();
    }
    
    public function searchAllAcerto($id,$codigo){
        $this->db->where('Usuario_id_usuario',$codigo);
        $this->db->where('id_categoria',$id);
        return $this->db->get('RespostaUsuario')->result_array();
    }
    //Função que retorna as respostas referentes $codigo(id_da questão)
    public function searchAllAlt($codigo){
        $this->db->where('id_pergunta',$codigo);
        $query = $this->db->get('Alternativas2')->result_array();
        return($query);
    }
    
    public function searchAllPergCat($codigo){
        $this->db->where('id_categoria',$codigo);
        return $this->db->get('Pergunta')->result_array();
    }
   
     public function searchAllAlter(){
        return $this->db->get('Alternativas2')->result();
    }
    
    public function searchAllCat2($codigo){
        $this->db->where('id_categoria',$codigo);
        return $this->db->get('Categoria')->result();
    }
    
    
    
    // Função que pega o ultimo id inserido
    
    public function getid(){
       return $this->db->insert_id();
    }
    
    public function pegaIdUser()
    {
        $n=$this->session->userdata("_EMAIL");
        $query = $this->db->query("SELECT id_usuario FROM Usuario WHERE ds_email='$n'")->result_array();
        $result = $query[0]['id_usuario'];    
        return($result);
    }
    
    public function getNome(){
        $n=$this->session->userdata("_EMAIL");
        $sql = $this->db->query("SELECT nm_usuario FROM Usuario WHERE ds_email = '$n'");
        return($sql->result_array());
        
    }
    
    //Função da pagina de configurações do usuario que faz a troca de senha do usuario.
    public function trocaSenha($senha){
        $n=$this->session->userdata("_EMAIL");
        $this->db->query("UPDATE Usuario SET ds_senha = '$senha' WHERE ds_email = '$n'");
    }
    
    public function verifSenha($senha_velha,$senha_nova)
    {
        $n = $this->session->userdata("_EMAIL");
        $senha2 = $this->db->query("SELECT ds_senha FROM Usuario WHERE ds_email = '$n'")->result_array();
        if($senha_velha === $senha2[0]['ds_senha'])
        {
            $this->trocaSenha($senha_nova);
            return(0);
        }else{
            return(1);
        }
    }
    
     public function verifCerto($id,$idperg){
        $query = $this->db->query("SELECT count(Pergunta_id_pergunta) FROM RespostaUsuario WHERE Usuario_id_usuario='$id' and Pergunta_id_pergunta ='$idperg'")->result_array();
        $result = $query[0]['count(Pergunta_id_pergunta)'];
        return($result);
    }
//-----------------------------------------------------------------------------------------------------
    //Função que verifica se o email exisate na base de dados.
    public function verifEmail($email){
        $query = $this->db->query("SELECT count(id_usuario) FROM Usuario WHERE ds_email='$email'")->result_array();
        $result = $query[0]['count(id_usuario)'];
        return($result);
    }
    //função que troca o email na base de dados.
    public function trocaEmail($email){
        $n=$this->session->userdata("_EMAIL");
        $this->db->query("UPDATE Usuario SET ds_email = '$email' WHERE ds_email = '$n'");
    }
    
    //Função que pega a empresa do usuario que esta logado.
    public function getEmpresa()
    {
        $n = $this->pegaIdUser();
        $query = $this->db->query("SELECT nm_empresa FROM UsuarioComum WHERE id_usuario ='$n'")->result_array();
        $result = $query[0]['nm_empresa'];
        return($result);
        
    }
    
    //Função que troca a empresa na base de dados.
    public function trocaEmpresa($empresa_nova)
    {
        $n = $this->pegaIdUser();
        $this->db->query("UPDATE UsuarioComum SET nm_empresa = '$empresa_nova' WHERE id_usuario = '$n'");
    }
    
    public function insertPerg ($cont){
        $data1['id_categoria'] = $cont->id_categoria;
        $data1['nm_pergunta'] = $cont->nm_pergunta;
        $this->db->insert('Pergunta',$data1);
        $data['id_pergunta'] = self::getid();
        $data['ds_alternativa'] = $cont->alternativa;
        $data['tipo'] =0;
        $this->id = self::getid();
        return $this->db->insert('Alternativas2',$data);
    }
    
    
    public function insertPerg2 (Alternativas2 $cont){
        $data['id_pergunta'] = $this->id;
        $data['ds_alternativa'] = $cont->alternativa;
        $data['tipo'] =1;
        return $this->db->insert('Alternativas2',$data);
    }
    
    public function insertImg (Imagem $cont){
        $data['id_pergunta'] = $this->id;
        $data['nm_imagem'] = $cont->nm_imagem;
        $data['ds_fonte_imagem'] = $cont->ds_fonte_imagem;
        return $this->db->insert('Imagens',$data);
    }
    
    
    public function pegaId()
    {
     $query=$this->db->query('Select id_usuario FROM Administrador');
     return $query;
    }
    
     public function pegaSenha($senha)
    {
     $query = $this->db->query("SELECT * FROM Usuario WHERE ds_email = '$senha'")->result_array();
     return($query);
    }

    public function insertuser (UsuarioComum $cont){
        $data1['ds_email'] = $cont->email;
        $data1['ds_senha'] = $cont->senha;
        $data1['nm_usuario'] = $cont->nome;
        $data1['tipo_usuario'] = 0;
        $this->db->insert('Usuario',$data1);
        $data['id_usuario'] = self::getid();
        $data['nm_empresa'] = $cont->empresa;
        return $this->db->insert('UsuarioComum',$data);
    }
    
    public function insertadmin (Administrador $cont){
        $data1['ds_email'] = $cont->email;
        $data1['ds_senha'] = $cont->senha;
        $data1['nm_usuario'] = $cont->nome;
        $data1['tipo_usuario'] = 1;
        $this->db->insert('Usuario',$data1);
        $data['id_usuario'] = self::getid();
        $data['ds_telefone'] = $cont->telefone;
        return $this->db->insert('Administrador',$data);
    }
    
    
    public function getUser($email,$senha) {
        $this->db->where("ds_email",$email);
        $this->db->where("ds_senha",$senha);
        $a=$this->db->get('Usuario');
        if ($a->num_rows()>0){
            if($a->row()->tipo_usuario === "1")
            {
                return ("admin");
            }else if($a->row()->tipo_usuario === "0"){
                return ("usuario");
            }
            }else{
            return false;
        }
    }
    
    public function deleteCat($codigo){
        $this->db->where('id_categoria',$codigo);
        return $this->db->delete('Categoria');
        redirect('alteracat');
    }
    
    public function deletePerg($codigo){
        $this->db->where('id_pergunta',$codigo);
        return $this->db->delete('Pergunta');
        redirect('alteraperg');
    }
    
    public function altereCate($nome,$id){
        $this->db->query("UPDATE Categoria SET nm_categoria = '$nome' WHERE id_categoria = '$id'");
    }
    
    public function alterePerg($nome,$id){
        $this->db->query("UPDATE Pergunta SET nm_pergunta = '$nome' WHERE id_pergunta = '$id'");
    }
    
    public function altereAlter($nome,$id){
        $this->db->query("UPDATE Alternativas2 SET ds_alternativa = '$nome' WHERE id_alternativa = '$id'");
    }
    
    
    
    //TESTE WEB SERVICE
    public function webservice(){
        return $this->db->get('Categoria')->result();
    }
    
    //Função que pega o ultimo id da tabela img.
    public function getIdImg(){
        
        $id = $this->db->query("SELECT MAX(id_imagem) FROM Imagens")->result_array();
        $final = $id[0]['MAX(id_imagem)'];
        return $final;
    }
    
}
?>