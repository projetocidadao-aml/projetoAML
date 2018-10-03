<?php
session_start();
include_once("../config.class.php");
	/**
	 * cadastra Pessoa
	 */
	class atualizaPessoa
	{
		private $conn;
		function __construct($id, $nome, $email, $apelido,$usuario,$senha,$cpf, $celular,$descperfil , $status, $observacoes , $perfil)
		{

			 $protocolo = $_SESSION['idUser'].date('YmdHis').'-'.substr($cpf, -2);

			$conexao = new conexao();
			$this->conn = $conexao->conect();
			$sql = "UPDATE PESSOA set PESSOA_NOME = '$nome', `PESSOA_APELIDO` = '$apelido', `PESSOA_USUARIO` = '$usuario', `PESSOA_SENHA` = '$senha', `PESSOA_CPF` = '$cpf', `PESSOA_EMAIL` = '$email', `PESSOA_CELULAR` = '$celular', `PESSOA_DESCPERFIL` = '$descperfil', `PESSOA_STATUS` = '$status',  `PESSOA_OBSERVACOES` = '$observacoes' WHERE PESSOA_ID = $id";
			
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