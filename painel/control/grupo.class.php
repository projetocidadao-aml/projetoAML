<?php
include("model/grupo.class.php");
class grupo{
    public $id;
    function __construct(){
        if(isset($_GET['id'])){
            $this->id = $_GET['id'];
        }
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