<?php
include("model/pegaMembrosGrupo.class.php");
class membrosGrupo{
    function __construct(){

    }
    function listaMembros(){
        $grupoModel = new pegaMembros();
        $grupoModel->listaDados();
    }
}
$membrosGrupo = new membrosGrupo();