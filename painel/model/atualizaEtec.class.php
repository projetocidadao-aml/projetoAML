<?php
include("../config.class.php");
session_start();

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
			$sql = "UPDATE ETEC SET ETEC_NOME = '$nome', ETEC_DIRETOR = '$diretor', ETEC_RESPONSAVEL ='$responsavel', ETEC_USUARIO = '$usuario', ETEC_CEP = '$cep', ETEC_LOGRADOURO = '$endereco',ETEC_CIDADE = '$cidade', ETEC_EMAIL = '$email', ETEC_UF = '$uf', ETEC_TELEFONE = '$telefone' WHERE ETEC_ID = '1'";
			$db = $this->conn->prepare($sql);
			$db->execute();
			if($db){
			
					$_SESSION['nomeEtec'] = $nome;
					$_SESSION['nomeDiretor'] = $diretor;
					$_SESSION['nomeResponsavel'] = $responsavel;
					$_SESSION['nomeUsuario'] = $usuario;
					$_SESSION['senhaEtec'] = $senha;
					$_SESSION['cepEtec'] = $cep; 
					$_SESSION['logradouroEtec'] = $endereco; 
					$_SESSION['cidadeEtec'] = $cidade; 
					$_SESSION['emailEtec'] = $email;
					$_SESSION['ufEtec'] = $uf; 
					$_SESSION['telefoneEtec'] = $telefone;
					echo 'true';
			}
			else{
				echo 'false';
			}
			
		} 
		
	}
?>