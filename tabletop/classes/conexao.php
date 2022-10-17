<?php

class Conexao{
    private $host;
    private $usuario;
    private $senha;
    private $banco;
    private $conexao;

    function __construct($host,$usuario,$senha,$banco)
    {
        $this->host=$host;
        $this->usuario=$usuario;
        $this->senha=$senha;
        $this->banco=$banco;
    }

    function conectar(){
        $this->conexao = mysqli_connect(
            $this->host,
            $this->usuario,
            $this->senha,
            $this->banco 
        );

        if ($this->conexao->connect_error) {
            /* Use your preferred error logging method here */
            error_log('Connection error: ' . $this->conexao->connect_error);
            return false;
        } else {
            mysqli_query($this->conexao,"SET NAMES 'UTF8'");
            return true;
        }
    }

    function executarQuery($sql){
        return mysqli_query($this->conexao,$sql);
    }

    function obtemNumeroLinhas($query){
        $linhas = $this->executarQuery($query);
        return $linhas->num_rows;
    }
}