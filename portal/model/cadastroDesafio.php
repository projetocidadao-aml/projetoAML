<?php
include("../config.class.php");
	/**
	 * cadastra Pessoa
	 */
	class insereDesafio
	{
		private $conn;
		function __construct($tema, $descricao)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
			$sql = "INSERT INTO `DESAFIO` (`DESAFIO_TEMA`, `DESAFIO_DESCRICAO`, `DESAFIO_DATA`) VALUES ('$tema,'$descricao',NOW());";
			
			try{
				$db = $this->conn->prepare($sql);
				$db->execute();
				echo "true";
			}
			catch(PDOException $ex){
				echo 'false';
				return "Erro ao cadastrar, Erro: ".$ex->getMessage();
			}
		}
	}
?>