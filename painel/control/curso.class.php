<?php
include("../model/curso.class.php");
class curso{
    function __construct(){
        $this->id = $_POST['id'];
        $this->curso = $_POST['curso'];
        $this->duracao = $_POST['duracao'];
        $pessoa = new pessoa();
        $pessoa->cadastraCurso($this->id, $this->curso, $this->duracao);
    }
}
$grupo = new curso();