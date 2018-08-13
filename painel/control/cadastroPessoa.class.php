<?php
include('../model/cadastroPessoa.class.php');
include('../model/pessoa.class.php');

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
        $this->nome = $_POST['cad_pessoa_nome'];
        $this->apelido = $_POST['cad_pessoa_apelido'];
        $this->usuario = $_POST['cad_pessoa_usuario'];
        $this->senha = $_POST['cad_pessoa_senha'];
        $this->cpf = $_POST['cad_pessoa_cpf'];
        $this->email = $_POST['cad_pessoa_email'];
        $this->celular = $_POST['cadastro_celular_pessoa'];
        $this->descperfil = $_POST['cad_pessoa_descricao'];
        $this->status = $_POST['cad_pessoa_status'];
        $this->protocolo = $_POST['cad_pessoa_protocolo'];
        $this->observacoes = $_POST['cad_pessoa_obs'];
        $this->idperfil = $_POST['cad_pessoa_perfil'];
        new cadastraPessoa($this->nome, $this->email, $this->apelido, $this->usuario, $this->senha, $this->cpf, $this->email, $this->celular, $this->descperfil, $this->status, $this->protocolo,$this->observacoes,$this->idperfil,$this->prenome,$this->preemail,$this->preperfil,$this->preobs,$this->curso,$this->semestrecurso,$this->cursoupload,$this->buscapessoa,$this->buscapessoacurso);
        
    }
}
new Pessoa();
?>