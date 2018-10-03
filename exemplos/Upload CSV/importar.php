<?php
require_once '../dal/MotoboyDAL.php';

//Pega o nome do arquivo temporario csv
$arquivo = $_FILES["arquivoCSV"]["tmp_name"];

//Pega o nome real do arquivo csv que foi inserido
$nome = $_FILES["arquivoCSV"]["name"];

//Transforma o csv de nome temporario em um objeto
$objeto = fopen($arquivo, 'r',"\n");

//Contador para rodar ate que se acabe
$count = 0;

//Laco de repeticao que vai atribuir a variavel dados o objeto csv que foi transformado limitado a 1000kb separado por ponto e virgula

/**
 * 
 * @var $dados String
 */
while (($dados = fgetcsv($objeto, 1000, ";")) != FALSE) {
   
    //instancia minha classe motoboy
    $mot = new Motoboy();
    
    //seta as informacoes do vetor em seus determinado local
    $mot->setNomeMotoboy($dados[0]);    
    $mot->setNomeCidade($dados[1]);
    $mot->setDisponibilidade($dados[2]);
    $mot->setSiglaUF($dados[3]);
     
    //executa o metodo para inserir
    MotoboyDAL::insereMotoboyCSV($mot);
    
    //acrescenta +1 no contador
    $count++;      
  
}
//Apresenta a mensagem e quantos foram inseridos
echo "Foram inseridos um total de: ". $count ." - Motoboys";

