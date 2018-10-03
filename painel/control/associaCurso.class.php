<?php
include("../model/associaCurso.class.php");
class curso{
    function __construct(){
        $this->id = $_POST['id'];
        $this->curso = $_POST['curso'];
        $this->periodo = $_POST['periodo'];
        $pessoa = new pessoa();
        $pessoa->cadastraCurso($this->id, $this->curso, $this->periodo);
    }
}
$grupo = new curso();