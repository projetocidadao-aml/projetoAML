<?php
include("config.class.php");
class capturaCursos
{
    private $conn;
    function __construct()
    {
       $conexao = new conexao();
       $this->conn = $conexao->conect();
   }
   function listaCursos(){
    $sql = "SELECT * FROM CURSOS";
    $db = $this->conn->prepare($sql);
    $db->execute();
    $linha = $db->fetchAll();
    foreach ($linha as $value) {
        echo "<tr>
        <td class = 'curso$value[CURSO_ID]'>".$value['CURSO_ID']."</td>
        <td class = 'curso$value[CURSO_ID]'>".$value['CURSO_NOME']."</td>
        <td class = 'curso$value[CURSO_ID]'>".$value['CURSO_DURACAO']."</td>
        <td><button class='btn btn-secondary alteraCurso' id='$value[CURSO_ID]'>Alterar</button></td>
        </tr>";
    }

}

function listaCursosComboBox(){
    $sql = "SELECT * FROM CURSOS";
    $db = $this->conn->prepare($sql);
    $db->execute();
    $linha = $db->fetchAll();
    foreach ($linha as $value) {
        echo "<option value = '$value[CURSO_ID]'>
        $value[CURSO_NOME]
        </option>";
    }
    
}


function listaCursosEtec(){

    $sql = "SELECT * FROM ETEC_CURSOS INNER JOIN CURSOS ON CURSOS.CURSO_ID = ETEC_CURSOS.ID_CURSO WHERE ID_ETEC = $_SESSION[idUser]";
    $db = $this->conn->prepare($sql);
    $db->execute();
    $linha = $db->fetchAll();
    foreach ($linha as $value) {
        echo "<tr>
        <td>".$value['ETEC_CURSO_ID']."</td>
        <td>".$value['CURSO_NOME']."</td>
        <td>".$value['ETEC_CURSO_PERIODO']."</td>
        <td><button class='btn btn-danger' id = '$value[ETEC_CURSO_ID]' onclick = 'modalExcluir(this.id)'>Excluir</button></td>

        </tr>";
    }

}
}


?>