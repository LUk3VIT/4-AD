<?php
 
include 'usuario.php'; 
require_once 'conexao.php'; 

interface IRepositorioUsuarios {
    public function VerificarDataMensagem();
}
 
class RepositorioUsuariosMySQL implements IRepositorioUsuarios
{ 
    private $conexao; 
    public function __construct()
    {
        $this->conexao = new Conexao("localhost","root","","chat_4ad");
       
        if($this->conexao->conectar()==false){ 
            echo "Erro de conexao ".mysqli_connect_error(); 
        } 
    }

   public function LoginUsuario($nome_usuario)
    {
        $sql = "SELECT * FROM tbl_usuario WHERE nome_usuario = '$nome_usuario'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function VerificarDataMensagem()
    {
        $sql = "SELECT * FROM"
    }

    
}
   