<?php
session_start();
include("../config.class.php");
	/**
	 * Captura login
	 */
	class capturaLogin
	{
		private $conn;
		function __construct($email, $pass)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
			$sql = "SELECT * FROM PESSOA WHERE PESSOA_EMAIL = '$email' AND PESSOA_SENHA = '$pass'";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetch();
			$resultfinal = $db->rowCount();
			if($result){
				$_SESSION['loged'] = "Logado";
				foreach ($result as $results){
					$_SESSION['idUser_portal'] = $result['PESSOA_ID'];
					$_SESSION['PESSOA_NOME'] = $result['PESSOA_NOME'];
					$_SESSION['PESSOA_APELIDO'] = $result['PESSOA_APELIDO'];
                    $_SESSION['ID_PERFIL'] = $result['ID_PERFIL'];

				}
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
?>
