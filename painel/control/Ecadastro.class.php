<?php
include('../model/Ecadastro.class.php');

class Pessoa{
    public $nome;
    public $apelido;	
    public $email;
	public $celular;
	public $cpf;
    public $usuario; 
	public $senha;
	public $descricao;

    function __construct()
	{
        $this->nome = $_POST['nomePessoa'];
        $this->apelido = $_POST['apelidoPessoa'];
        $this->email = $_POST['emailPessoa'];
        $this->celular = $_POST['celularPessoa'];
        $this->cpf = $_POST['cpfPessoa'];
        $this->usuario = $_POST['usuarioPessoa'];
        $this->senha = $_POST['senhaPessoa'];
        $this->descricao = $_POST['descricaoPessoa'];

        new capturaDadosE($this->nome, $this->apelido, $this->email, $this->celular, $this->cpf, $this->usuario, $this->senha, $this->descricao);
    }
}
new Ecadastro();
?>