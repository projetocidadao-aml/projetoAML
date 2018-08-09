<?php
include("config.class.php");
	/**
	 * Grupo Model
	 */
	class grupoModel
	{
		private $conn;
		function __construct()
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
		}
		function listaDados(){
			$sql = "SELECT G.*, E.*, count(P.PESSOA_GRUPO_ID) AS countPerson
            FROM GRUPO AS G
            JOIN ETEC AS E ON G.ID_ETEC = E.ETEC_ID
            JOIN PESSOA_GRUPO AS P ON G.GRUPO_ID = P.GRUPO_ID";
			
            $db = $this->conn->prepare($sql);
            $db->execute();
			$linha = $db->fetchAll();
			foreach ($linha as $value) {
				echo "<tr>
						<td>".$value['GRUPO_ID']."</td>
						<td>".$value['GRUPO_NOME']."</td>
						<td>".$value['ETEC_NOME']."</td>
						<td>".$value['countPerson']."</td>
						<td><a class='btn btn-secondary' href='index.php?page=detalhamento_grupo&id=".$value['GRUPO_ID']."'>Detalhar</a></td>
					</tr>";
			}
		}
		function pegaDados($id, $campo){
			$sql = "SELECT G.*, E.*, P.*
            FROM GRUPO AS G
            JOIN ETEC AS E ON G.ID_ETEC = E.ETEC_ID
			JOIN PESSOA_GRUPO AS P ON G.GRUPO_ID = P.GRUPO_ID
			WHERE G.GRUPO_ID = '$id'";
			
            $db = $this->conn->prepare($sql);
            $db->execute();
			$linha = $db->fetch(PDO::FETCH_OBJ);
			echo $linha->$campo;
		}
		function listaPessoas($id){
			$sql = "SELECT G.*, P.*, PER.*, PES.*
			FROM GRUPO AS G 
			JOIN PESSOA_GRUPO AS P ON G.GRUPO_ID = P.GRUPO_ID
			JOIN PESSOA AS PES ON P.PESSOA_ID = PES.PESSOA_ID
			JOIN PERFIL AS PER ON PES.ID_PERFIL = PER.PERFIL_ID
			WHERE G.GRUPO_ID = '$id'";
			
            $db = $this->conn->prepare($sql);
            $db->execute();
			$linha = $db->fetchAll();
			foreach ($linha as $value) {
				echo "<tr>
						<td>".$value['PESSOA_ID']."</td>
						<td>".$value['PESSOA_NOME']."</td>
						<td>".$value['PERFIL']."</td>
						<td><a class='btn btn-secondary' href='?page=cadastro_pessoa	&id=".$value['PESSOA_ID']."'>Detalhar</a></td>
					</tr>";
			}
		}
		function listaDesafios($id){
			$sql = "SELECT DG.*,D.*
			FROM DESAFIO_GRUPO AS DG
			JOIN DESAFIO AS D ON DG.DESAFIO_GRUPO_ID = D.DESAFIO_ID
			WHERE DG.ID_GRUPO_DESAFIADO = '$id'";
			
            $db = $this->conn->prepare($sql);
            $db->execute();
			$linha = $db->fetchAll();
			foreach ($linha as $value) {
				echo "
					<div class='desafio col-md-2  m-auto d-flex align-items-center'>
						<h4 class='text-center text-white titleBordered d-block w-100'><a href='?page=detalhamento_desafio&id=".$value['DESAFIO_ID']."'>".$value['DESAFIO_TEMA']."</a></h4>
					</div>";
			}
		}
    }
?>