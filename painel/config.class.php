<?php

class conexao{
    //Define as variaveis
    public $host;
    public $user;
    public $pass;

    public function __construct()
    {
        //Atribui valor as variaveis
        $this->host = "mysql:host=mysql.w2it.com.br;dbname=etec_teste_2";
        $this->user = "etecdev";
        $this->pass = "5J%2dt2ds";
    }
    public function conect()
    {
        //tenta conexão com banco retorna conexão caso tenha sucesso, caso não, retorna mensagem de erro.
        try{
            $con = new PDO($this->host, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $con -> exec("set names utf8");
            return $con;
        }
        catch (PDOException $ex){
            return "Erro ao conectar, Erro: ".$ex->getMessage();
        }
    }
}