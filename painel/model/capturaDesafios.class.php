<?php
    include("config.class.php");
    class capturaDesafios
    {
        private $conn;
		function __construct()
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
		}
        function listaDesafios(){
            $sql = "SELECT D.*, C.*, G.*
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
                        <td>".$value['DESAFIO_ID']."</td>
                        <td>".$value['DESAFIO_TEMA']."</td>
                        <td>".$value['DESAFIO_DATA']."</td>
                        <td>".$vencedor."</td>
                        <td><a href='index.php?page=detalhamento_desafio?id=".$value['DESAFIO_ID']."'><button class='btn btn-secondary' >Alterar</button></a></td>
                    </tr>";
            }
            
        }
    }
?>