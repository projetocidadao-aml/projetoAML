<?php
include_once("config.class.php");
class pessoa
{
    private $conn;
    function __construct()
    {
     $conexao = new conexao();
     $this->conn = $conexao->conect();
 }
 function listaPessoas(){
    $sql = "SELECT  *, PESSOA.PESSOA_ID AS ID FROM PESSOA INNER JOIN PERFIL ON PERFIL_ID = ID_PERFIL 
 LEFT JOIN PESSOA_CURSO ON PESSOA_ID = ID_PESSOA 
 LEFT JOIN ETEC_CURSOS ON PESSOA_CURSO.ID_CURSO = ETEC_CURSOS.ID_CURSO
 LEFT JOIN ETEC ON ETEC_ID = ID_ETEC
 LEFT JOIN PESSOA_GRUPO PG ON PG.PESSOA_ID = PESSOA.PESSOA_ID
 LEFT JOIN GRUPO ON PG.GRUPO_ID = GRUPO.GRUPO_ID";
    $db = $this->conn->prepare($sql);
    $db->execute();
    $linha = $db->fetchAll();

    foreach ($linha as $value) {
        echo "<tr>
        <td>".$value['ID']."</td>
        <td>".$value['PESSOA_NOME']."</td>
        <td>".$value['PERFIL']."</td>
        <td>".$value['ETEC_NOME']."</td>
        <td>".$value['GRUPO_NOME']."</td>
        <td><button class='btn btn-secondary'>Alterar</button></td>
        </tr>";
    }

}
}


?>