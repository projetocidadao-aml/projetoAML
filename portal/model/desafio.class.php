<?php
include("config.class.php");
	/**
	 * Captura login
	 */
	class pegaDesafios
	{
		private $conn;
		function __construct()
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
		}
		function listaDados(){
			
			$sql = "SELECT * FROM GRUPO ORDER BY RAND( ) LIMIT 3;";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetchAll();
			$flag = 0;

				foreach ($result as $results){
					if ($flag == 1) {
						$card = "card lilas";
						$card_body = "card-body text-center";
					}else{
						$card = "card roxo";
						$card_body = "card-body text-center testPTColorWhite";
					}
					echo '<div class="col-sm-12 col-md-4 mb-3 d-flex align-self-stretch  flex-column ">
                <div class="'.$card.'">
                    <img class="card-img-top" src="dist/img/capaGrupoIndex.png" alt="">
                    <div class="'.$card_body.'">
                        <h4 class="card-title">'.$results["GRUPO_NOME"].'
                        </h4>
                        <p class="card-text justify">'.$results["GRUPO_DESC_COMPLETA"].'</p>
                        <a class="card-link btn btn-outline-primary btn-lilas" href="index.php?page=desafios&id='.$results["GRUPO_ID"].'">Ver desafio</a>
                    </div>
                </div>
            </div>';
			$flag += 1;

			}
		}
	}
?>
