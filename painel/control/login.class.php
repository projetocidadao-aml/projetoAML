<?php
include("../model/login.class.php");
	/**
	 * 
	 */
	class Login
	{
		public $username;
		public $pass;
		function __construct()
		{
			$this->username = $_POST['user'];
			$this->pass = $_POST['pass'];
			new capturaLogin($this->username, $this->pass);
		}
	}
	new Login();
?>