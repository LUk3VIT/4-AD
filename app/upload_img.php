<?php

include_once '../classes/conexao.php';

 if(isset($_FILES[ 'arquivo' ][ 'name' ]) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ){
   
   $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
   $nome = $_FILES[ 'arquivo '][ 'name' ];
   $nomefoto = $_POST['nome'];

   $extensao = pathinfo ( $nome, PATHINFO_EXTENSION);

   $extensao = strtolower ($extensao);

   if(strstr ( '.jpg;.jepg;.gif;.png', $extensao) ) {
      $novoNome = uniqid( (time () ) . '.' . $extensao;
      $destino = 'upload/' . $novoNome;

      if (@move_uploaded_file( $arquivo_tmp, $destino ) ){

      }
      else
         echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita';
   }
   else
      echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png';
 }
 else
  echo 'Você não enviou nenhum arquivo!';

 $sqlinsert = "insert into categoria (nome,foto) values ('$nomefoto','$destino')";

 $resultado = msqli_query($conexao, $sqlinsert);

if (!$resultado){
    die ('Query Invalida!!!!!'.@mysqli_error($conexao));
} else {
    echo "Registro Cadastrado com sucesso!!!";
}
header("Location:principal.php");
mysqli_close($conexao);
