<?php
include("config.class.php");
	/**
	 * Insere dados no banco ETEC
	 */
	class insereDados
	{
		private $conn;
		function __construct($nome,$email,$cep,$endereco,$cidade,$uf,$usuario,$senha,$telefone,$diretor,$responsavel)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
			//CÓDIGO ETEC NÃO É AUTO_INCREMENT...
			$sql = "INSERT INTO `ETEC` (`ETEC_NOME`, `ETEC_DIRETOR`, `ETEC_RESPONSAVEL`, `ETEC_USUARIO`, `ETEC_SENHA`, `ETEC_CEP`, `ETEC_LOGRADOURO`, `ETEC_CIDADE`, `ETEC_EMAIL`, `ETEC_UF`, `ETEC_TELEFONE`) VALUES ('$nome', '$diretor', '$responsavel', '$usuario', '$senha', '$cep', '$endereco', '$cidade', '$email', '$uf', '$telefone')";
			$db = $this->conn->prepare($sql);
			try{
				echo "true";
				$db->execute();
			}
			catch(PDOException $ex){
				echo 'false';
				return "Erro ao cadastrar, Erro: ".$ex->getMessage();
			}
		}
	}
?>