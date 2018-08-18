<?php
include("model/desafio.class.php");
class desafio{
    function __construct(){

    }
    function listaDesafios(){
        $grupoModel = new pegaDesafios();
        $grupoModel->listaDados();
    }
}
$desafio = new desafio();