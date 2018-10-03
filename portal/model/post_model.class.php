<?php
    ini_set('display_errors', 1);
	require "config.class.php";
	//sistema de postagens
	class post_model
	{
		private $conn;
		function __construct()
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
        }
        
	}