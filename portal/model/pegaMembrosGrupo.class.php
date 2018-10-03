<?php

	/**
	 * Captura login
	 */
	class pegaMembros
	{
		private $conn;
		function __construct()
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
		}
		function listaDados(){
			
			$sql = "SELECT p.PESSOA_NOME FROM GRUPO AS g
					INNER JOIN PESSOA_GRUPO AS pg ON pg.GRUPO_ID = g.GRUPO_ID
					INNER JOIN PESSOA AS p ON p.PESSOA_ID = pg.PESSOA_ID
					WHERE g.GRUPO_ID = "."'".$_SESSION['idUser_portal']."'";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetchAll();

				foreach ($result as $results){
		
					echo '<li>'.$results["PESSOA_NOME"].'</li>';
					
			}
		}
	}
?>
