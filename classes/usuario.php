<?php

class Usuario 
{
    private $nome_usuario;
    private $nick_usuario;
    private $email_usuario;  
    private $senha_usuario;
    private $bio_usuario;

    public function __construct($nome_usuario,$nick_usuario,$email_usuario,$senha_usuario,$bio_usuario)
    { 
        
        $this->nome_usuario=$nome_usuario;
        $this->nick_usuario=$nick_usuario;
        $this->email_usuario=$email_usuario;
        $this->senha_usuario=$senha_usuario;
        $this->bio_usuario=$bio_usuario;
    }

    public function setNomeUsuario($nome_usuario){
        $this->nome_usuario=$nome_usuario;
    }

    public function getNomeUsuario(){
        return $this->nome_usuario;
    }

    public function setNickUsuario($nick_usuario){
        $this->nick_usuario=$nick_usuario;
    }

    public function getNickUsuario(){
        return $this->nick_usuario;
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

    public function setBioUsuario($bio_usuario){
        $this->bio_usuario=$bio_usuario;
    }

    public function getBioUsuario(){
        return $this->bio_usuario;
    }
}