<?php
    include 'model/capturaDesafios.class.php';
    class desafioControl
    {
        function capturaDados(){
            $desafio = new capturaDesafios();
            $desafio->listaDesafios();
        }
    }