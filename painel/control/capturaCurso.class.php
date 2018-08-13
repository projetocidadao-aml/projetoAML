<?php
    include 'model/capturaCurso.class.php';
    class cursoControl
    {
        function capturaDados(){
            $curso = new capturaCursos();
            $curso->listaCursos();
        }
    }