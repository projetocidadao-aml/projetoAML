<?php
include_once("../config.class.php");
class pessoa
{
    private $conn;
    function __construct()
    {
       $conexao = new conexao();
       $this->conn = $conexao->conect();
   }
   function cadastraCurso($id, $curso, $duracao){

    if($id == null){
     $sql = "INSERT INTO `CURSOS` (`CURSO_NOME`, `CURSO_DURACAO`) VALUES ('$curso', '$duracao')";
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

    $sql = "UPDATE `CURSOS` SET `CURSO_NOME` = '$curso', `CURSO_DURACAO` = '$duracao' WHERE CURSO_ID = $id";
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