<?php
include_once("config.class.php");
class listaAtividades
{
	private $conn;
	function __construct()
	{
		$conexao = new conexao();
		$this->conn = $conexao->conect();
	}
	function listaAtividades($paginacao){

		$sql = "CALL USP_ATIVIDADES($_SESSION[idUser],$paginacao)";
		$db = $this->conn->prepare($sql);
		$db->execute();
		$linha = $db->fetchAll();

		if(empty($linha)){
			$sql = "CALL USP_ATIVIDADES($_SESSION[idUser],0)";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$linha = $db->fetchAll();
		}

		foreach ($linha as $value) {

			if($value['MIDIA'] == 'imagem'){
				echo " <div class='row atividades'>
				<div class='col-md-2'>
				<img src='./dist/img/logo.png' class='img-thumbnail img-responsive border-0' style='width: 100px;'>
				</div>
				<div class='col-md-9'>
				<h3 class='text-secondary titleBordered'>$value[GRUPO_NOME] subiu uma $value[MIDIA].</h3>
				<p>Upload de $value[MIDIA] feito no dia $value[DATA_HISTORICO] às $value[HORA_HISTORICO] </p>
				</div>
				</div>";
			}

			else{
				echo " <div class='row atividades'>
				<div class='col-md-2'>
				<img src='./dist/img/logo.png' class='img-thumbnail img-responsive border-0' style='width: 100px;'>
				</div>
				<div class='col-md-9'>
				<h3 class='text-secondary titleBordered'>$value[GRUPO_NOME] subiu um $value[MIDIA].</h3>
				<p>Upload de $value[MIDIA] feito no dia $value[DATA_HISTORICO] às $value[HORA_HISTORICO] </p>
				</div>
				</div>";
			}



		}

	}

}


?>