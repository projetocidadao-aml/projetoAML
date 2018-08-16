<?php
include_once("../config.class.php");
	/**
	 * cadastra Pessoa
	 */
	class cadastraPessoa
	{
		private $conn;
		function __construct($nome, $apelido,$usuario,$senha,$cpf, $email, $celular,$descperfil ,$dataalteracao ,$status,$protocolo,$observacoes)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
			$sql = "INSERT INTO `PESSOA` (`PESSOA_NOME`, `PESSOA_APELIDO`, `PESSOA_USUARIO`, `PESSOA_SENHA`, `PESSOA_CPF`, `PESSOA_EMAIL`, `PESSOA_CELULAR`, `PESSOA_DESCPERFIL`, `PESSOA_DATA_CADASTRO`, `PESSOA_DATA_ALTERACAO`, `PESSOA_STATUS`, `PESSOA_PROTOCOLO`, `PESSOA_OBSERVACOES`, `ID_PERFIL`) VALUES ('$nome', '$apelido', '$usuario', '$senha', NULL, '$email', '$celular', '$descperfil', NOW(), NOW(), '$status','$protocolo', '$observacoes', NULL);";
			
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