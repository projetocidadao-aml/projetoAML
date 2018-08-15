<?php
include 'model/capturaCurso.class.php';
class cursoControl
{
	function capturaDados(){
		$curso = new capturaCursos();
		$curso->listaCursos();

	}

	function capturaDadosEtec(){
		$curso = new capturaCursos();
		$curso->listaCursosEtec();

	}

		function listaCursosComboBox(){
		$curso = new capturaCursos();
		$curso->listaCursosComboBox();

	}
}