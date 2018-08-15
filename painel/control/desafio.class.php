<?php
include("../model/desafio.class.php");
class desafio{
    function __construct(){
        $this->id = $_POST['id'];
        $this->tema = $_POST['tema'];
        $this->data = $_POST['data'];
        $this->descricao = $_POST['descricao'];
        $desafio = new cadastraDesafio();
        $desafio->cadastraDesafio($this->id, $this->tema, $this->data, $this->descricao);
    }
}
$desafio = new desafio();