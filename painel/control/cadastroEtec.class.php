<?php
include('../model/cadastroEtec.class.php');

class Etec{
    public $nome;
    public $email;
    public $cep; 
	public $endereco;
	public $cidade;
	public $uf;
	public $usuario;
	public $senha;
	public $telefone;
	public $diretor;
	public $responsavel;
    function __construct()
	{
        $this->nome = $_POST['nomeEtec'];
        $this->email = $_POST['emailEtec'];
        $this->cep = $_POST['cepEtec'];
        $this->endereco = $_POST['enderecoEtec'];
        $this->cidade = $_POST['cidadeEtec'];
        $this->uf = $_POST['ufEtec'];
        $this->usuario = $_POST['usuarioEtec'];
        $this->senha = $_POST['senhaEtec'];
        $this->telefone = $_POST['telefoneEtec'];
        $this->diretor = $_POST['diretorEtec'];
        $this->responsavel = $_POST['responsavelEtec'];
        new cadastraPessoa($this->nome, $this->email, $this->cep, $this->endereco, $this->cidade, $this->uf, $this->usuario, $this->senha, $this->telefone, $this->diretor, $this->responsavel);
    }
}
new Etec();
?>