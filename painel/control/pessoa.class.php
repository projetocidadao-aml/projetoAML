<?php
    include 'model/pessoa.class.php';
    class pessoaControl
    {
        function capturaDados(){
            $pessoa = new pessoa();
            $pessoa->listaPessoas();
        }
    }
    