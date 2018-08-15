<?php
include("../config.class.php");
class cadastraDesafio
{
  private $conn;
  function __construct()
  {
   $conexao = new conexao();
   $this->conn = $conexao->conect();
 }
 function cadastraDesafio($id, $tema, $data, $descricao){



  if($id == null){


    $sql = "INSERT INTO `DESAFIO` (`DESAFIO_TEMA`, `DESAFIO_DESCRICAO1`,`DESAFIO_DATA`, `DESAFIO_SITUACAO`) VALUES ('$tema', '$descricao', '$data', 'Aberto')";

    try{
      $db = $this->conn->prepare($sql);
      $db->execute();
      echo "true";
    }
    catch(PDOException $ex){
      echo "false";
    }

  }

  else{
    $sql = "UPDATE `DESAFIO` SET `DESAFIO_TEMA` = '$tema', `DESAFIO_DESCRICAO1` = '$descricao',`DESAFIO_DATA` = '$data' WHERE  `DESAFIO_ID`= $id";
    try{
      $db = $this->conn->prepare($sql);
      $db->execute();
      echo "altrue";
    }
    catch(PDOException $ex){
      echo "alfalse";
    }
  }

}
}


?>