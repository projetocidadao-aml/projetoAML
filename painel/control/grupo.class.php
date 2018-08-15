<?php
include("model/grupo.class.php");
class grupo{
    public $id;
    function __construct(){

        // $this->id = $_GET['id'];
        $this->id = $_SESSION['idUser'];
        
    }
    function listaGrupos(){
        $grupoModel = new grupoModel();
        $grupoModel->listaDados();
    }
    function capturaDados($campo){
        $grupoModel = new grupoModel();
        $grupoModel->pegaDados($this->id, $campo);
    }
    function listaIntegrantes(){
        $grupoModel = new grupoModel();
        $grupoModel->listaPessoas($this->id);
    }
    function listaDesafios(){
        $grupoModel = new grupoModel();
        $grupoModel->listaDesafios($this->id);
    }
}
$grupo = new grupo();