<?php
include 'model/listaAtividades.class.php';
class capturaAtividades
{


	function __construct($paginacao){

		function capturaDados($paginacao){
			$atividades = new listaAtividades();
			$atividades->listaAtividades($paginacao);

		}
		
		capturaDados($paginacao);
	}



}