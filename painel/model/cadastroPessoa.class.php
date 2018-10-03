<?php
session_start();
include_once("../config.class.php");
	/**
	 * cadastra Pessoa
	 */
	class cadastraPessoa
	{
		private $conn;
		function __construct($nome, $email, $apelido,$usuario,$senha,$cpf, $celular,$descperfil , $status, $observacoes , $perfil)
		{

			 $protocolo = $_SESSION['idUser'].date('YmdHis').'-'.substr($cpf, -2);

			$conexao = new conexao();
			$this->conn = $conexao->conect();
			$sql = "INSERT INTO `PESSOA` (`PESSOA_NOME`, `PESSOA_APELIDO`, `PESSOA_USUARIO`, `PESSOA_SENHA`, `PESSOA_CPF`, `PESSOA_EMAIL`, `PESSOA_CELULAR`, `PESSOA_DESCPERFIL`, `PESSOA_DATA_CADASTRO`, `PESSOA_DATA_ALTERACAO`, `PESSOA_STATUS`, `PESSOA_PROTOCOLO`, `PESSOA_OBSERVACOES`, `ID_PERFIL`) VALUES ('$nome', '$apelido', '$usuario', '$senha', '$cpf', '$email', '$celular', '$descperfil', NOW(), NOW(), '$status','$protocolo', '$observacoes', $perfil)";
			
			try{
				// echo $sql;
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