<?php

require_once 'usuario.php';
require_once 'conexao.php';

interface IRepositorioUsuarios {
    public function LoginUsuario($nome_usuario,$senha_usuario);
    public function CadastraUsuario($Usuario);
}

class RepositorioUsuariosMySQL implements IRepositorioUsuarios
{
    private $conexao;
    public function __construct()
    {
        $this->conexao = new Conexao("localhost","root","","4ad");
       
        if($this->conexao->conectar()==false){
            echo "Erro de conexao ".mysqli_connect_error();
        }

    }

   public function LoginUsuario($nome_usuario,$senha_usuario)
    {
        $sql = "SELECT * FROM tbl_usuario WHERE nome_usuario = '$nome_usuario' AND senha_usuario = '$senha_usuario'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function CadastraUsuario($Usuario)
    {
        $id_usuario = $Usuario->getIdUsuario();
        $nome_usuario = $Usuario->getNomeUsuario();
        $email_usuario = $Usuario->getEmailUsuario();
        $senha_usuario = $Usuario->getSenhaUsuario();

        $sql = "INSERT INTO tbl_usuario (id_usuario,nome_usuario,email_usuario,senha_usuario) VALUES ('$id_usuario','$nome_usuario','$email_usuario','$senha_usuario')";
        $this->conexao->executarQuery($sql);
    }
    
}
    