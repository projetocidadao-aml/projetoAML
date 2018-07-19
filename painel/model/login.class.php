<?php
include("../config.class.php");
	/**
	 * Captura login
	 */
	class capturaLogin
	{
		private $conn;
		function __construct($username, $pass)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
			$sql = "SELECT * FROM PESSOA WHERE PESSOA_EMAIL = '$username' AND PESSOA_SENHA = '$pass'";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetch(PDO::FETCH_OBJ);
			if($result){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
?>