<?php
    include("config.class.php");
    class pessoa
    {
        private $conn;
		function __construct()
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
		}
        function listaPessoas(){
            $sql = "SELECT P.*, PER.*, PC.*, C.*, PG.*, G.*,E.*
            FROM PESSOA AS P
            LEFT JOIN PERFIL AS PER ON P.ID_PERFIL = PER.PERFIL_ID
            LEFT JOIN PESSOA_CURSO AS PC ON P.PESSOA_ID = PC.ID_PESSOA
            LEFT JOIN CURSOS AS C ON PC.ID_CURSO = C.CURSO_ID
            LEFT JOIN PESSOA_GRUPO AS PG ON P.PESSOA_ID = PG.PESSOA_ID
            LEFT JOIN GRUPO AS G ON PG.GRUPO_ID = G.GRUPO_ID
            LEFT JOIN ETEC AS E ON E.ETEC_ID = G.ID_ETEC";
            $db = $this->conn->prepare($sql);
            $db->execute();
			$linha = $db->fetchAll();
			foreach ($linha as $value) {
				echo "<tr>
                        <td>".$value['PESSOA_ID']."</td>
                        <td>".$value['PESSOA_NOME']."</td>
                        <td>".$value['PERFIL']."</td>
                        <td>".$value['GRUPO_ID']."</td>
                        <td>".$value['ETEC_NOME']."</td>
                        <td><button class='btn btn-secondary'>Alterar</button></td>
                    </tr>";
			}
            
        }
    }
    

?>