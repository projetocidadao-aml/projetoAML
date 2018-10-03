<?php
include('../model/preCadastroPessoa.class.php');

class Pessoa{
	public $nome;
	public $cpf;
	public $email;
	public $curso;
	public $semestrecurso;



	function __construct()
	{
		$this->nome = $_POST['nome'];
		$this->cpf = $_POST['cpf'];
		$this->email = $_POST['email'];
		$this->curso = $_POST['curso'];
		$this->semestrecurso = $_POST['semestre'];
		new cadastraPessoa($this->nome, $this->cpf, $this->email, $this->curso, $this->semestrecurso);

	}
}
new Pessoa();
?>