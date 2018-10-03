<?php
session_start();
include_once("../config.class.php");
class pessoa
{
    private $conn;
    function __construct()
    {
       $conexao = new conexao();
       $this->conn = $conexao->conect();
   }
   function cadastraCurso($id){

      $sql = "DELETE FROM `ETEC_CURSOS` WHERE ETEC_CURSO_ID = $id";
      $db = $this->conn->prepare($sql);
      try{
        $db->execute();
        echo "true";
    }
    catch(PDOException $ex){
        echo "false";
    }



}
}


?>