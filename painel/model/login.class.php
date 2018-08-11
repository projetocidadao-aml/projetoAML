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
				$_SESSION['loged'] = "Logado";
				foreach ($result as $results){
					$_SESSION['idUser'] = $result['ETEC_ID'];
					$_SESSION['nomeEtec'] = $result['ETEC_NOME'];
					$_SESSION['nomeDiretor'] = $result['ETEC_DIRETOR'];
					$_SESSION['nomeResponsavel'] = $result['ETEC_RESPONSAVEL'];
					$_SESSION['nomeUsuario'] = $result ['ETEC_USUARIO'];
					$_SESSION['senhaEtec'] = $result ['ETEC_SENHA'];
					$_SESSION['cepEtec'] = $result['ETEC_CEP']; 
					$_SESSION['logradouroEtec'] = $result['ETEC_LOGRADOURO']; 
					$_SESSION['cidadeEtec'] = $result['ETEC_CIDADE']; 
					$_SESSION['emailEtec'] = $result['ETEC_EMAIL'];
					$_SESSION['ufEtec'] = $result['ETEC_UF']; 
					$_SESSION['telefoneEtec'] = $result['ETEC_TELEFONE'];
					$_SESSION['bairroEtec'] = $result['ETEC_BAIRRO'];

				}
				
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
?>
