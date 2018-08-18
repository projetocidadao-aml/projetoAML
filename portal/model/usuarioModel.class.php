<?php
include("config.class.php");
	/**
	 * Captura informações do usuario
	 */
	 class usuarioModel
	{
		private $conn;
		public $valorCampo;
		function __construct($id, $campo)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
            $sql = "SELECT * FROM PESSOA 
            INNER JOIN PESSOA_GRUPO ON PESSOA_GRUPO_ID = PESSOA.PESSOA_ID
            INNER JOIN GRUPO ON GRUPO.GRUPO_ID = PESSOA_GRUPO.GRUPO_ID
            INNER JOIN PESSOA_CURSO ON PESSOA_CURSO.ID_PESSOA = PESSOA.PESSOA_ID
            INNER JOIN CURSOS ON CURSOS.CURSO_ID = PESSOA_CURSO.PESSOA_CURSO_ID
            INNER JOIN ETEC_CURSOS ON ETEC_CURSOS.ETEC_CURSO_ID = CURSOS.CURSO_ID
            INNER JOIN ETEC ON ETEC.ETEC_ID = ETEC_CURSOS.ID_ETEC WHERE ID_PESSOA = $id";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetch();
			$resultfinal = $db->rowCount();
			$_SESSION['loged'] = "Logado";
			$this->valorCampo = $result[$campo];
		}
	}
?>
