<?php
include("model/grupo.class.php");
class grupo{
    public $id;
    function __construct(){
<<<<<<< HEAD
        if(isset($_GET['id'])){
            $this->id = $_GET['id'];
        }
=======
        // $this->id = $_GET['id'];
        $this->id = $_SESSION['idUser'];
        
>>>>>>> c15a65f24ad18b4f3cdd3a7e668c3e2aaa079399
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