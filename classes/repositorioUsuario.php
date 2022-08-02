<?php

include 'usuario.php';
require_once 'conexao.php'; 

interface IRepositorioUsuarios {
    public function LoginUsuario($nome_usuario,$senha_usuario);
    public function GuardaID($nome_usuario,$senha_usuario);
    public function VerificarNome($nome_usuario);
    public function VerificarNick($nick_usuario);
    public function CadastraUsuario($Usuario);
    public function ListarDados($id_usuario); 
    public function atualizarPerfil($Usuario, $id_usuario);
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

    public function GuardaID($nome_usuario,$senha_usuario){
        $sql = "SELECT * FROM tbl_usuario WHERE nome_usuario = '$nome_usuario' AND senha_usuario = '$senha_usuario'";
        $consulta = $this->conexao->executarQuery($sql);
        $registro = mysqli_fetch_array($consulta);
        $id_registro = $registro[0];
        return $id_registro;
    }

    public function VerificarNome($nome_usuario)
    {
        $sql = "SELECT * FROM tbl_usuario WHERE nome_usuario = '$nome_usuario'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function VerificarNick($nick_usuario)
    {
        $sql = "SELECT * FROM tbl_usuario WHERE nick_usuario = '$nick_usuario'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function CadastraUsuario($Usuario)
    {
        $nome_usuario = $Usuario->getNomeUsuario();
        $nick_usuario = $Usuario->getNickUsuario();
        $email_usuario = $Usuario->getEmailUsuario(); 
        $senha_usuario = $Usuario->getSenhaUsuario();
        $bio_usuario = $Usuario->getBioUsuario();

        $sql = "INSERT INTO tbl_usuario (id_usuario,nome_usuario,nick_usuario,email_usuario,senha_usuario,bio_usuario) VALUES ('','$nome_usuario','$nick_usuario','$email_usuario','$senha_usuario','$bio_usuario')";
        $this->conexao->executarQuery($sql);
    }

    
    public function ListarDados($id_usuario)
    {
        $sql = "SELECT * FROM tbl_usuario WHERE id_usuario = '$id_usuario'";
        $listagem = $this->conexao->executarQuery($sql);
        $arrayDados = array();
        while($linha = mysqli_fetch_array($listagem)){
            $perfil = new Usuario(
                $linha['nome_usuario'], 
                $linha['nick_usuario'],
                $linha['email_usuario'],
                $linha['senha_usuario'],
                $linha['bio_usuario']);
            array_push($arrayDados, $perfil);
        }
        return $arrayDados;
    }

    public function atualizarPerfil($Usuario, $id_usuario)
    {
        $nome_usuario = $Usuario->getNomeUsuario();
        $nick_usuario = $Usuario->getNickUsuario();
        $email_usuario = $Usuario->getEmailUsuario();
        $senha_usuario = $Usuario->getSenhaUsuario();
        $bio_usuario = $Usuario->getBioUsuario();

        $sql = "UPDATE tbl_usuario SET nome_usuario='$nome_usuario',nick_usuario='$nick_usuario',email_usuario='$email_usuario',senha_usuario='$senha_usuario',bio_usuario='$bio_usuario' WHERE tbl_usuario . id_usuario = '$id_usuario'";

        $this->conexao->executarQuery($sql);
    } 
}
   