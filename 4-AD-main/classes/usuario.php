<?php

class Usuario
{
    private $id_usuario;
    private $nome_usuario;
    private $email_usuario;
    private $senha_usuario;

    public function __construct($id_usuario,$nome_usuario,$email_usuario,$senha_usuario)
    {
        $this->id_usuario=$id_usuario;
        $this->nome_usuario=$nome_usuario;
        $this->email_usuario=$email_usuario;
        $this->senha_usuario=$senha_usuario;
    }

    public function setIdUsuario($id_usuario){
        $this->id_usuario=$id_usuario;
    }

    public function getIdUsuario(){
        return $this->id_usuario;
    }

    public function setNomeUsuario($nome_usuario){
        $this->nome_usuario=$nome_usuario;
    }

    public function getNomeUsuario(){
        return $this->nome_usuario;
    }

    public function setEmailUsuario($email_usuario){
        $this->email_usuario=$email_usuario;
    }

    public function getEmailUsuario(){
        return $this->email_usuario;
    }

    public function setSenhaUsuario($senha_usuario){
        $this->senha_usuario=$senha_usuario;
    }

    public function getSenhaUsuario(){
        return $this->senha_usuario;
    }
}