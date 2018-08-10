<?php
include('../model/cadastroDesafio.class.php');

class Desafio{
    public $tema;
    public $descricao;

    function __construct()
	{
        $this->tema = $_POST['cad_desafio_tema'];
        $this->descricao = $_POST['cad_desafio_descricao'];

        new insereDesafio($this->tema, $this->descricao);
    }
}
new Desafio();
?>