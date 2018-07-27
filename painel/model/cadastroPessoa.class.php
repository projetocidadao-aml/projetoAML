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
			$sql = "INSERT INTO PESSOA VALUES ('17','$nome', '$apelido','$usuario','$senha','$cpf', '$email', '$celular','$descperfil' ,'$datacadastro' ,'$dataalteracao' ,'$status','$protocolo','$observacoes','$idperfil'/*,'$prenome','$preemail','$preperfil','$preobs','$curso','$semestrecurso','$cursoupload','$buscapessoa','$buscapessoacurso'*/)";
			$sql1 = "INSERT INTO CURSO VALUES ('28', 'idpessoa','$curso','$semestrecurso')";
			$sql3 = "SELECT PESSOA.PESSOA_NOME, (SELECT CURSOS.CURSO_ID FROM CURSOS INNER JOIN PESSOA_CURSO ON CURSOS.CURSO_ID = PESSOA_CURSO.ID_CURSO INNER JOIN PESSOA ON PESSOA_CURSO.ID_PESSOA = PESSOA.PESSOA_ID WHERE PESSOA.PESSOA_NOME = PESSOA.PESSOA_NOME;) FROM PESSOA INNER JOIN CURSOS ON PESSOA_CURSO.ID_PESSOA = PESSOA_ID_PESSOA INNER JOIN CURSOS ON PESSOA_CURSO.ID_CURSO = CURSO_ID_CURSO WHERE 
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetch(PDO::FETCH_OBJ);
			echo var_dump($result);
		}
	}
?>