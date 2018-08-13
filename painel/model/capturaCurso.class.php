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
                        <td>".$value['CURSO_ID']."</td>
                        <td>".$value['CURSO_NOME']."</td>
                        <td>".$value['CURSO_DURACAO']."</td>
                        <td><button class='btn btn-secondary'>Alterar</button></td>
                    </tr>";
			}
            
        }
    }
    

?>