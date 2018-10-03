<?php
include("model/grupo.class.php");
class grupo{
    public $id;
    function __construct(){


        if(isset($_GET['id'])){
            $this->id = $_GET['id'];

        }

        else{

            $this->id = $_SESSION['idUser'];

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
    function listaIntegrantes($id){
        $grupoModel = new grupoModel();
        $grupoModel->listaPessoas($id);
    }
    function listaDesafios($idG){
        $grupoModel = new grupoModel();
        $grupoModel->listaDesafios($idG);
    }
}
$grupo = new grupo();