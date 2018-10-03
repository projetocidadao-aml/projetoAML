<?php
include('../model/atualizaPessoa.class.php');

class Pessoa{
    public $id;
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
    // public $protocolo;
    public $observacoes;
    public $idperfil;
    public $prenome;
    public $preemail;
    public $preperfil;
    public $preobs;
    public $curso;
    public $semestrecurso;
    public $cursoupload;
    public $buscapessoa;
    public $buscapessoacurso;


    function __construct()
	{
        $this->id = $_POST['detalhamento_id'];
        $this->nome = $_POST['detalhamento_nome'];
        $this->apelido = $_POST['detalhamento_apelido'];
        $this->usuario = $_POST['detalhamento_usuario'];
        $this->senha = $_POST['detalhamento_senha'];
        $this->cpf = $_POST['detalhamento_cpf'];
        $this->email = $_POST['detalhamento_email'];
        $this->celular = $_POST['detalhamento_celular_pessoa'];
        $this->descperfil = $_POST['detalhamento_descricao'];
        $this->status = $_POST['detalhamento_status'];
        // $this->protocolo = $_POST['detalhamento_protocolo'];
        $this->observacoes = $_POST['detalhamento_obs'];
        new atualizaPessoa($this->id, $this->nome, $this->email, $this->apelido, $this->usuario, $this->senha, $this->cpf,  $this->celular, $this->descperfil, $this->status,$this->observacoes,$this->idperfil);
        
    }
}
new Pessoa();
?>