<?php 
include("config.class.php");
	/**
	 * 
	 */
	class Contador 
	{
		public $grupos;	
		public $alunos;
		public $desafios;

		function Contador()
		{
			   $this->contaGrupo();
			   $this->contaDesafios();
			   $this->contaPessoa();

   		}
 
    function contaGrupo(){
        
          $conexao = new conexao();
		$this->conn = $conexao->conect();
		$sql = "SELECT * FROM GRUPO";	
		$buscarGrupo = $this->conn->prepare($sql);
		$buscarGrupo->execute();
		$linha= $buscarGrupo->fetch();
		$this->grupos = $buscarGrupo->rowCount();
			
        }

    function contaDesafios(){
        
        $conexao = new conexao();
		$this->conn = $conexao->conect();
		$sql = "SELECT * FROM DESAFIO";	
		$buscarGrupo = $this->conn->prepare($sql);
		$buscarGrupo->execute();
		$linha= $buscarGrupo->fetch();
		$this->desafios = $buscarGrupo->rowCount();
			
        }

        function contaPessoa(){
        
        $conexao = new conexao();
		$this->conn = $conexao->conect();
		$sql = "SELECT * FROM PESSOA";	
		$buscarGrupo = $this->conn->prepare($sql);
		$buscarGrupo->execute();
		$linha= $buscarGrupo->fetch();
		$this->alunos = $buscarGrupo->rowCount();
			
        }

	}
 ?>
