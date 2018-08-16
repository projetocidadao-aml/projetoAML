<?php
include_once("../config.class.php");
	/**
	 * Captura dados E
	 */
	class capturaDadosE
	{
		private $conn;
		function __construct($nome, $apelido, $email, $celular, $cpf, $usuario, $senha, $descricao)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
			//CÓDIGO ECADASTRO NÃO É AUTO_INCREMENT...
			$sql = "INSERT INTO ETEC VALUES ('17','$nome', '$apelido', '$email', '$celular', '$cpf', '$usuario', '$senha', '$descricao')";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetch(PDO::FETCH_OBJ);
			echo var_dump($result);
		}
	}
?>