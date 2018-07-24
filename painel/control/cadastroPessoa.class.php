<?php
include('../model/cadastroPessoa.class.php');

class Pessoa{
    public $nome;
    public $apelido;
    public $usuario; 
	public $senha;
	public $cpf;
	public $email;
	public $celular;
	public $descperfil;
	public $datacadastro;
	public $dataalteracao;
    public $status;
    public $protocolo;
    public $observacoes;
    public $idperfil;
    function __construct()
	{
        $this->nome = $_POST['nomeEtec'];
        $this->apelido = $_POST['emailEtec'];
        $this->usuario = $_POST['cepEtec'];
        $this->senha = $_POST['enderecoEtec'];
        $this->cpf = $_POST['cidadeEtec'];
        $this->email = $_POST['ufEtec'];
        $this->celular = $_POST['usuarioEtec'];
        $this->descperfil = $_POST['senhaEtec'];
        $this->datacadastro = $_POST['telefoneEtec'];
        $this->dataalteracao = $_POST['diretorEtec'];
        $this->status = $_POST['responsavelEtec'];
        $this->protocolo = $_POST['responsavelEtec'];
        $this->observacoes = $_POST['responsavelEtec'];
        $this->idperfil = $_POST['responsavelEtec'];
        new capturaDados($this->nome, $this->email, $this->cep, $this->endereco, $this->cidade, $this->uf, $this->usuario, $this->senha, $this->telefone, $this->diretor, $this->responsavel);
    }
}
new Etec();
?>