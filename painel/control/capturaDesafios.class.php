<?php
include 'model/capturaDesafios.class.php';
class desafioControl
{
	function capturaDados(){
		$desafio = new capturaDesafios();
		$desafio->listaDesafios();
	}

	function capturaDado($id, $campo){
		$desafio = new capturaDesafios();
		$desafio->listaDesafio($id, $campo);
	}
}