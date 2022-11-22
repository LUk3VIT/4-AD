<?php
 
include 'usuario.php'; 
require_once 'conexao.php';  
    
interface IRepositorioTabletop {
    public function PegarInfoClasse($classe); 
    public function EscolherMagia($id);
    public function CriarPersonagem($id,$nome,$img,$classe,$nivel,$nivel_maximo,$vida,$dinheiro,$ataque,$defesa,$id_inventario,$mag1,$mag2,$mag3);
    public function CriarInventario($id,$nome_pers,$item1,$item2,$item3,$item4);
    public function PuxarIdInventario($id);
    public function VerificarNome($nome_pers);
    public function MostrarPersonagens($id);
    public function MostrarPersonagem($id);
    public function MostrarInventario($nome);
    public function PegarIdRemetente($nome);
    public function ApagarItem($usuario);
    public function AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
    public function PegarItem($espaco,$item,$destinatario);
    public function VerificarItem($classe);
    public function TirarDinheiro($id_pers,$dinheiro_atual);
    public function DarDinheiro($id,$dinheiro);
    public function ComprarItem($espaco,$item,$nome_pers);
    public function PuxarPreco($item);
    public function VerificarArma($id);
    public function ApagarPersonagem($id);
    public function VerPreco($item);
    public function VerificarArmaClasse($classe,$item);
    public function PuxarImagemItem($item);
    public function PuxarImagemMagia($magia);
    public function PuxarDescricaoMagia($magia);
    public function PuxarTipoArma($item);
    public function PuxarNumeroPersonagens($id);
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

    public function EscolherMagia($id)
    {
        $sql = "SELECT * FROM magias WHERE id = '$id'";
        $consulta = $this->conexao->executarQuery($sql);
        $registro = mysqli_fetch_array($consulta);
        $resultado = $registro[2];
        return $resultado;
    }

    public function CriarPersonagem($id,$nome,$img,$classe,$nivel,$nivel_maximo,$vida,$dinheiro,$ataque,$defesa,$id_inventario,$mag1,$mag2,$mag3)
    {
        $sql = "INSERT INTO tbl_personagem (id_pers,id_usuario,nome,img,classe,nivel,nivel_max,vida,dinheiro,ataque,defesa,id_inventario,pistas,mag1,mag2,mag3,mag4,mag5,mag6,mag7) VALUES ('','$id','$nome','$img','$classe','$nivel','$nivel_maximo','$vida','$dinheiro','$ataque','$defesa','$id_inventario','','$mag1','$mag2','$mag3','','','','')" ;
        $this->conexao->executarQuery($sql);
    }

    public function CriarInventario($id,$nome_pers,$item1,$item2,$item3,$item4)
    {
        $sql = "INSERT INTO tbl_inventario (id_inventario,id_usuario,nome_pers,item1,item2,item3,item4,item5,item6,item7,item8,item9,item10,item11,item12,item13,item14,item15,item16,item17,item18,item19,item20,item21,item22,item23,item24,item25) VALUES ('','$id','$nome_pers','$item1','$item2','$item3','$item4','','','','','','','','','','','','','','','','','','','','','')";
        $this->conexao->executarQuery($sql);
    }

    public function PuxarIdInventario($nome)
    {
        $sql = "SELECT * FROM tbl_inventario WHERE nome_pers = '$nome'" ;
        $consulta = $this->conexao->executarQuery($sql);
        $registro = mysqli_fetch_array($consulta);
        $resultado = $registro[0];
        return $resultado;
    } 

    public function VerificarNome($nome_pers)
    {
        $sql = "SELECT * FROM tbl_personagem WHERE nome = '$nome_pers'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function MostrarPersonagens($id){
        $sql = "SELECT * FROM tbl_personagem WHERE id_usuario = '$id'";
        $consulta = $this->conexao->executarQuery($sql);
        return $consulta;
    }
 
    public function MostrarPersonagem($id)
    {
        $sql = "SELECT * FROM tbl_personagem WHERE id_pers = '$id'";
        $consulta = $this->conexao->executarQuery($sql);
        return $consulta;
    } 

    public function MostrarInventario($nome) 
    {
        $sql = "SELECT * FROM tbl_inventario WHERE nome_pers = '$nome'";
        $consulta = $this->conexao->executarQuery($sql);
        return $consulta;
    }
  
    public function PegarIdRemetente($nome)
    {
        $sql = "SELECT * FROM tbl_personagem WHERE nome = '$nome'";
        $consulta = $this->conexao->executarQuery($sql);
        return $consulta;
    }

    public function ApagarItem($usuario)
    {
        $sql = "DELETE FROM tbl_inventario WHERE nome_pers = '$usuario'";
        $this->conexao->executarQuery($sql);
    }

    public function AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25)
    {
        $sql = "INSERT INTO tbl_inventario (id_inventario,id_usuario,nome_pers,item1,item2,item3,item4,item5,item6,item7,item8,item9,item10,item11,item12,item13,item14,item15,item16,item17,item18,item19,item20,item21,item22,item23,item24,item25) VALUES ('$id_inventario','$id_usuario','$nome_pers','$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item15','$item16','$item17','$item18','$item19','$item20','$item21','$item22','$item23','$item24','$item25')";
        $this->conexao->executarQuery($sql);
    }

    public function PegarItem($espaco,$item,$destinatario)
    {
        $sql = "UPDATE tbl_inventario SET '$espaco' = '$item' WHERE nome_pers = '$destinatario'";
        $this->conexao->executarQuery($sql);
    }

    public function VerificarItem($classe){
        $sql = "SELECT * FROM itens WHERE classes_proibidas LIKE '%$classe%'";
        $consulta = $this->conexao->executarQuery($sql);
        return $consulta;
    }

    public function TirarDinheiro($id_pers,$dinheiro_atual)
    {
        $sql = "UPDATE tbl_personagem SET dinheiro = '$dinheiro_atual' WHERE id_pers = '$id_pers'";
        $this->conexao->executarQuery($sql);
    }

    public function DarDinheiro($id,$dinheiro)
    {
        $sql = "UPDATE tbl_personagem SET dinheiro = '$dinheiro' WHERE id_pers = '$id'";
        $this->conexao->executarQuery($sql);         
    }

    public function ComprarItem($espaco,$item,$nome_pers)
    {
        $sql = "UPDATE tbl_inventario SET '$espaco' = '$item' WHERE nome_pers = '$nome_pers'";
        $this->conexao->executarQuery($sql);
    }

    public function PuxarPreco($item)
    {
        $sql = "SELECT * FROM itens WHERE nome = '$item'";
        $consulta = $this->conexao->executarQuery($sql);
        $registro = mysqli_fetch_array($consulta);
        $resultado = $registro[4];
        return $resultado;
    }

    public function VerificarArma($id)
    {
        $sql = "SELECT * FROM tbl_inventario WHERE id_inventario = '$id' LIKE 'arma %'";
        $consulta = $this->conexao->executarQuery($sql);
        return $consulta;
    }

    public function ApagarPersonagem($id)
    {
        $sql = "DELETE FROM tbl_personagem WHERE id_pers = '$id'";
        $this->conexao->executarQuery($sql);
    }

    public function VerPreco($item)
    {
        $sql = "SELECT * FROM itens WHERE nome = '$item'";
        $consulta = $this->conexao->executarQuery($sql);
        return $consulta;
    }

    public function VerificarArmaClasse($classe,$item){
        $sql = "SELECT * FROM itens WHERE nome = '$item' AND classes_proibidas LIKE '%$classe%'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function SortearVerme($sorteio)
    {
        $sql = "SELECT * FROM vermes WHERE numero = '$sorteio'";
        $consulta = $this->conexao->executarQuery($sql);
        return $consulta;
    }

    public function PuxarImagemItem($item)
    {
        $sql = "SELECT * FROM itens WHERE nome = '$item'" ;
        $consulta = $this->conexao->executarQuery($sql);
        $registro = mysqli_fetch_array($consulta);
        $resultado = $registro[1];
        return $resultado;
    }
 
    public function PuxarImagemMagia($magia)
    {
        $sql = "SELECT * FROM magias WHERE nome = '$magia'";
        $consulta = $this->conexao->executarQuery($sql);
        $registro = mysqli_fetch_array($consulta);
        $resultado = $registro[1];
        return $resultado;
    }

    public function PuxarDescricaoMagia($magia)
    {
        $sql = "SELECT * FROM magias WHERE nome = '$magia'";
        $consulta = $this->conexao->executarQuery($sql);
        $registro = mysqli_fetch_array($consulta);
        $resultado = $registro[3];
        return $resultado;
    }

    public function PuxarTipoArma($item)
    {
        $sql = "SELECT * FROM itens WHERE nome = '$item'";
        $consulta = $this->conexao->executarQuery($sql);
        $registro = mysqli_fetch_array($consulta);
        $resultado = $registro[3];
        return $resultado;
    }

    public function PuxarImagemVerme($verme)
    {
        $sql = "SELECT * FROM vermes WHERE nome = '$verme'";
        $consulta = $this->conexao->executarQuery($sql);
        $registro = mysqli_fetch_array($consulta);
        $resultado = $registro[1];
        return $resultado;
    }

    public function PuxarNumeroPersonagens($id)
    {
        $sql = "SELECT * FROM tbl_personagem WHERE id_usuario = '$id'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }
}
   