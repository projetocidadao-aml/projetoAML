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
        function cadastraDesafio($tema, $data, $descricao){
            $sql = "INSERT INTO `DESAFIO` (`DESAFIO_TEMA`, `DESAFIO_DESCRICAO1`,`DESAFIO_DATA`, `DESAFIO_SITUACAO`) VALUES ('$tema', '$data', '$descricao', 'Aberto')";
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