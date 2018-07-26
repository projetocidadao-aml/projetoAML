<?php
include("../config.class.php");
	/**
	 * Captura dados p
	 */
	class capturaDadosP
	{
		private $conn;
		function __construct($nome, $apelido,$usuario,$senha,$cpf, $email, $celular,$descperfil ,$datacadastro ,$dataalteracao ,$status,$protocolo,$observacoes,$idperfil,$prenome,$preemail,$preperfil,$preobs,$curso,$semestrecurso,$cursoupload,$buscapessoa,$buscapessoacurso)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
			//CÓDIGO Pessoa NÃO É AUTO_INCREMENT...
			$sql = "INSERT INTO PESSOA VALUES ('17','$nome', '$apelido','$usuario','$senha','$cpf', '$email', '$celular','$descperfil' ,'$datacadastro' ,'$dataalteracao' ,'$status','$protocolo','$observacoes','$idperfil','$prenome','$preemail','$preperfil','$preobs','$curso','$semestrecurso','$cursoupload','$buscapessoa','$buscapessoacurso')";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetch(PDO::FETCH_OBJ);
			echo var_dump($result);
		}
	}
?>