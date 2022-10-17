<?php
 
include 'usuario.php'; 
require_once 'conexao.php'; 
  
interface IRepositorioTabletop {
    public function PegarInfoClasse($classe);
    
}
 
class RepositorioTabletopMySQL implements IRepositorioTabletop
{ 
    private $conexao; 
    public function __construct()
    {
        $this->conexao = new Conexao("localhost","root","","4ad_tabletop");
       
        if($this->conexao->conectar()==false){ 
            echo "Erro de conexao ".mysqli_connect_error(); 
        } 
    }

   public function PegarInfoClasse($classe)
    {
        $sql = "SELECT * FROM classes WHERE Classe = '$classe'";
        $consulta = $this->conexao->executarQuery($sql);
        return $consulta;
    }

}
   