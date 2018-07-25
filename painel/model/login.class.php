<?php
session_start();
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
			$sql = "SELECT * FROM ETEC WHERE (ETEC_USUARIO = '$username' OR ETEC_EMAIL = '$username') AND ETEC_SENHA = '$pass'";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetch();
			$resultfinal = $db->rowCount();
			if($result){
				foreach ($result as $results){
					$_SESSION['idUser'] = $result['ETEC_ID'];	
				}
				
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
?>
