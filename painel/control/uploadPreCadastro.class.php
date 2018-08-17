<?php
require_once("../model/uploadPreCadastro.class.php");

class uploadPreCadastroAluno{

    public $nome;
    public $cpf;
    public $email;
    public $perfil;
    public $curso;
    public $semestrecurso;

        public function upload(){

        $arquivo = $_FILES["upload_lista_pessoas"]["tmp_name"];
        $nome = $_FILES["upload_lista_pessoas"]["name"];
        
        $objeto = fopen($arquivo, 'r', "\n");

        $count = 0;
     
            while (($dados = fgetcsv($objeto, 1000, ";")) != false) {


            $this->nome = $dados[0];
            $this->email = $dados[1];
            $this->cpf = $dados[2];
            $this->perfil = $dados[3];
            $this->curso = $_POST['upload_nome_curso'];
            $this->semestrecurso = $_POST['upload_semestre_curso'];
            var_dump(new uploadPreCadastro($this->nome,$this->email,$this->cpf,$this->perfil, $this->curso, $this->semestrecurso));
            
            $count++;
        }
    }
   
}
$upload = new uploadPreCadastroAluno();
$upload->upload();

?>