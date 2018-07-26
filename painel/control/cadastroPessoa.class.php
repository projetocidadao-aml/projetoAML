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
        $this->nome = $_POST['cad_pessoa_nome'];
        $this->apelido = $_POST['cad_pessoa_apelido'];
        $this->usuario = $_POST['cad_pessoa_usuario'];
        $this->senha = $_POST['cad_pessoa_senha'];
        $this->cpf = $_POST['cad_pessoa_cpf'];
        $this->email = $_POST['cad_pessoa_email'];
        $this->celular = $_POST['cadastro_celular_pessoa'];
        $this->descperfil = $_POST['cad_pessoa_descricao'];
        $this->datacadastro = $_POST['telefoneEtec'];
        $this->dataalteracao = $_POST['diretorEtec'];
        $this->status = $_POST['cad_pessoa_status'];
        $this->protocolo = $_POST['cad_pessoa_protocolo'];
        $this->observacoes = $_POST['cad_pessoa_obs'];
        $this->idperfil = $_POST['cad_pessoa_perfil'];
        new capturaDadosP($this->nome, $this->email, $this->cep, $this->endereco, $this->cidade, $this->uf, $this->usuario, $this->senha, $this->telefone, $this->diretor, $this->responsavel);
    }
}
new Pessoa();
?>