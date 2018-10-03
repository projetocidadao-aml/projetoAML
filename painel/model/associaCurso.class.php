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
   function cadastraCurso($id, $curso, $periodo){
    $idEtec = $_SESSION['idUser'];
    if($id == null){
      $sql = "INSERT INTO `ETEC_CURSOS` (`ID_CURSO`, `ETEC_CURSO_PERIODO`, `ID_ETEC`) VALUES ($curso, '$periodo', $idEtec)";
      $db = $this->conn->prepare($sql);
      try{
        $db->execute();
        echo "true";
    }
    catch(PDOException $ex){
        echo "false";
    }
}

else{

    $sql = "UPDATE `ETEC_CURSOS` SET `ID_CURSO` = $curso, `ETEC_CURSO_PERIODO` = '$periodo' where ETEC_CURSO_ID = $id";

  $db = $this->conn->prepare($sql);
  try{
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