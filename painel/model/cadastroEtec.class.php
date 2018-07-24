<?php
include("../config.class.php");
	/**
	 * Captura dados etec
	 */
	class capturaDados
	{
		private $conn;
		function __construct($nome,$email,$cep,$endereco,$cidade,$uf,$usuario,$senha,$telefone,$diretor,$responsavel)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
			//CÓDIGO ETEC NÃO É AUTO_INCREMENT...
			$sql = "INSERT INTO ETEC VALUES ('4','$nome','$diretor','$responsavel','$usuario','$senha','$cep','$endereco','$cidade','$email','$uf','$telefone')";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetch(PDO::FETCH_OBJ);
			echo var_dump($result);
		}
	}
?>