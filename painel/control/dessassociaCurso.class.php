<?php
include("../model/desassociarCurso.class.php");
class curso{
    function __construct(){
        $this->id = $_REQUEST['idCurso'];
        $pessoa = new pessoa();
        $pessoa->cadastraCurso($this->id);
    }
}
$grupo = new curso();