<?php
	
	//verifica se a sessão ativa:


	if (isset($_SESSION['loged'])) {
		include 'loged.php';
	}
	else
	{
		include 'unloged.php';
	}