<?php
session_start();
class seguranca{
	public $page;
	function __construct(){
		//se o usuario estiver logado ele inclui a página de logado
		if (isset($_SESSION['idUser'])){
			include 'loged.php';
		}
		//se o usuario não estiver logado ele inclui a página não logado
		else{
			include 'unloged.php';
		}
	}
}