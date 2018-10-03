<?php
include_once("config.class.php");
class capturaDesafios
{
    private $conn;
    function __construct()
    {
     $conexao = new conexao();
     $this->conn = $conexao->conect();
 }
 function listaDesafios(){
    $sql = "SELECT D.*, C.*, G.*, date_format(DESAFIO_DATA, '%d/%m/%Y') as DESAFIO_DATA_FT
    FROM DESAFIO AS D
    LEFT JOIN COLOCACAO AS C ON D.DESAFIO_ID = C.ID_DESAFIO
    LEFT JOIN GRUPO AS G ON C.ID_GRUPO = G.GRUPO_ID";
    $db = $this->conn->prepare($sql);
    $db->execute();
    $linha = $db->fetchAll();
    foreach ($linha as $value) {
        if($value['DESAFIO_SITUACAO'] != 'Terminado'){
            $vencedor = 'Em Andamento';
        }else{
            $vencedor = $value['GRUPO_NOME'];
        }
        echo "<tr>
        <td class = 'desafio$value[DESAFIO_ID]'>".$value['DESAFIO_ID']."</td>
        <td class = 'desafio$value[DESAFIO_ID]'>".$value['DESAFIO_TEMA']."</td>
        <td hidden class = 'desafio$value[DESAFIO_ID]'>".$value['DESAFIO_DATA']."</td>
        <td class = 'desafio$value[DESAFIO_ID]'>".$value['DESAFIO_DATA_FT']."</td>
        <td hidden class = 'desafio$value[DESAFIO_ID]'>".$value['DESAFIO_DESCRICAO1']."</td>
        <td class = 'desafio$value[DESAFIO_ID]'>".$vencedor."</td>
        <td><button class='btn btn-secondary alteraDesafio' id = '$value[DESAFIO_ID]'>Alterar</button> <a class='btn btn-secondary alteraDesafio text-white' href = 'index.php?page=detalhamento_desafio&id=$value[DESAFIO_ID]'>Detalhar</a></td>
        </tr>";
    }

}

function listaDesafiosTabela($id){
    $sql = "SELECT D.*, C.*, G.*, ETEC.*, date_format(DESAFIO_DATA, '%d/%m/%Y') as DESAFIO_DATA_FT
    FROM DESAFIO AS D
    LEFT JOIN COLOCACAO AS C ON D.DESAFIO_ID = C.ID_DESAFIO
    LEFT JOIN GRUPO AS G ON C.ID_GRUPO = G.GRUPO_ID INNER JOIN ETEC ON ID_ETEC = ETEC_ID where DESAFIO_ID = $id ORDER BY COLOCACAO_PODIO";
    $db = $this->conn->prepare($sql);
    $db->execute();
    $linha = $db->fetchAll();
    foreach ($linha as $value) {


        if($value['COLOCACAO_PODIO'] == 1){
           echo "
           <tr class='bg-success'>
           <td>$value[DESAFIO_ID]</td>
           <td>$value[GRUPO_NOME]</td>
           <td>$value[ETEC_NOME]</td>
           <td><a class='btn btn-secondary' href='?page=detalhamento_grupo&id=$value[GRUPO_ID]'>Detalhar</a></td>
           </tr>
           "; 
       }

       else{
        echo "
        <tr>
        <td>$value[DESAFIO_ID]</td>
        <td>$value[GRUPO_NOME]</td>
        <td>$value[ETEC_NOME]</td>
        <td><a class='btn btn-secondary' href='?page=detalhamento_grupo&id=$value[GRUPO_ID]'>Detalhar</a></td>
        </tr>
        ";
    }


}

}

function listaDesafio($id, $campo){
    $sql = "SELECT D.*, C.*, G.*, ETEC.*, date_format(DESAFIO_DATA, '%d/%m/%Y') as DESAFIO_DATA_FT
    FROM DESAFIO AS D
    LEFT JOIN COLOCACAO AS C ON D.DESAFIO_ID = C.ID_DESAFIO
    LEFT JOIN GRUPO AS G ON C.ID_GRUPO = G.GRUPO_ID INNER JOIN ETEC ON ID_ETEC = ETEC_ID where DESAFIO_ID = $id";
    $db = $this->conn->prepare($sql);
    $db->execute();

    $linha = $db->fetch(PDO::FETCH_OBJ);

            // foreach ($linha as $value) {
            //     if($value['DESAFIO_SITUACAO'] != 'Terminado'){
            //         $vencedor = 'Em Andamento';
            //     }else{
            //         $vencedor = $value['GRUPO_NOME'];
            //     }
            // }

    echo($linha->$campo);


                // PRINT_R($linha);



}
}
?>