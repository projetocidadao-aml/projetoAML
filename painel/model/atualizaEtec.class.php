<?php
include_once("../config.class.php");
session_start();

	/**
	 * Captura dados etec
	 */
	class capturaDados
	{
		private $conn;
		function __construct($nome,$email,$cep,$endereco,$bairro,$cidade,$uf,$usuario,$senha,$telefone,$diretor,$responsavel)
		{

			$conexao = new conexao();
			$this->conn = $conexao->conect();
			$sql = "UPDATE ETEC SET ETEC_NOME = '$nome', ETEC_DIRETOR = '$diretor', ETEC_RESPONSAVEL ='$responsavel', ETEC_USUARIO = '$usuario', ETEC_CEP = '$cep', ETEC_LOGRADOURO = '$endereco', ETEC_BAIRRO = '$bairro',ETEC_CIDADE = '$cidade', ETEC_EMAIL = '$email', ETEC_UF = '$uf', ETEC_TELEFONE = '$telefone' WHERE ETEC_ID = '1'";
			$db = $this->conn->prepare($sql);
			try{
				$db->execute();
				$_SESSION['nomeEtec'] = $nome;
				$_SESSION['nomeDiretor'] = $diretor;
				$_SESSION['nomeResponsavel'] = $responsavel;
				$_SESSION['nomeUsuario'] = $usuario;
				$_SESSION['senhaEtec'] = $senha;
				$_SESSION['cepEtec'] = $cep; 
				$_SESSION['logradouroEtec'] = $endereco; 
				$_SESSION['cidadeEtec'] = $cidade; 
				$_SESSION['bairroEtec'] = $bairro; 
				$_SESSION['emailEtec'] = $email;
				$_SESSION['ufEtec'] = $uf; 
				$_SESSION['telefoneEtec'] = $telefone;
				echo 'true';
			}
			catch(PDOException $ex){
				echo 'false';
				return "Erro ao atualizar, Erro: ".$ex->getMessage();
			}
		} 
		
	}
?>