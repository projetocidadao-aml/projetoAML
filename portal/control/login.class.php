<?php
	include("../model/login.class.php");
	class Login
	{
		public $email;
		public $pass;
		function __construct()
		{
			$this->email = $_POST['email'];
			$this->pass = $_POST['pass'];
			new capturaLogin($this->email, $this->pass);
		}
	}
	new Login();
?>