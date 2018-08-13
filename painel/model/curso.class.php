<?php
    include("../config.class.php");
    class pessoa
    {
        private $conn;
		function __construct()
		{
			$conexao = new conexao();
            $this->conn = $conexao->conect();
		}
        function cadastraCurso($curso, $duracao){
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
    }
    

?>