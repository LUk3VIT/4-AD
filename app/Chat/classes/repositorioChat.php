<?php
 
include 'usuario.php'; 
require_once 'conexao.php'; 

interface IRepositorioChat {
    public function ApagarMensagens($data_hj);
}
 
class RepositorioChatMySQL implements IRepositorioChat
{ 
    private $conexao; 
    public function __construct()
    {
        $this->conexao = new Conexao("localhost","root","","chat_4ad");
       
        if($this->conexao->conectar()==false){ 
            echo "Erro de conexao ".mysqli_connect_error(); 
        } 
    }

    public function ApagarMensagens($data_hj)
    {
        $sql = "DELETE FROM chat_geral WHERE data_msg != '$data_hj'";
        $this->conexao->executarQuery($sql);
    }
    
}
   