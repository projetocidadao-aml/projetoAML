<?php
    include 'model/usuarioModel.class.php';
    class usuario{
        public $nome;
        public $nomeEtec;
        public $nomeGrupo;
        public function __construct() {
            $this->nome = $_SESSION['PESSOA_NOME'];
            $this->nomeEtec = $_SESSION['PESSOA_NOME'];
            $capturaNomeEtec = new usuarioModel($_SESSION['idUser_portal'], 'ETEC_NOME');
            $this->nomeEtec = $capturaNomeEtec->valorCampo;
            $capturaNomeGrupo = new usuarioModel($_SESSION['idUser_portal'], 'GRUPO_NOME');
            $this->nomeGrupo = $capturaNomeGrupo->valorCampo;;
        }
    }