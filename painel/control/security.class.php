<?php
	
	//verifica se a sessão ativa:
session_start();
	if(isset($_SESSION['idUser'])){

	}else{
		$_SESSION['loged'] = 'false';
	}
	if ($_SESSION['loged'] == 'Logado') {
		include 'loged.php';
	}
	else
	{
		include 'unloged.php';
	}
