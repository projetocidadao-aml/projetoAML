<?php
include 'model/capturaDesafios.class.php';
class desafioControl
{
	function capturaDados(){
		$desafio = new capturaDesafios();
		$desafio->listaDesafios();
	}

	function capturaDadosTabela($id){
		$desafio = new capturaDesafios();
		$desafio->listaDesafiosTabela($id);
	}

	function capturaDado($id, $campo){
		$desafio = new capturaDesafios();
		$desafio->listaDesafio($id, $campo);
	}
}