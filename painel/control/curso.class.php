<?php
include("../model/curso.class.php");
class curso{
    function __construct(){
        $this->curso = $_POST['curso'];
        $this->duracao = $_POST['duracao'];
        $pessoa = new pessoa();
        $pessoa->cadastraCurso($this->curso, $this->duracao);
    }
}
$grupo = new curso();