<?php
session_start();
include_once("../config.class.php");
	/**
	 * cadastra Pessoa
	 */
	class cadastraPessoa
	{
		private $conn;
		function __construct($nome, $cpf, $email, $curso, $semestrecurso)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
			// ID PERFIL 3 é de ALUNO
			$sql = "call USP_PRE_CADASTRO('$nome', '$email','$cpf', $_SESSION[idUser], 3, $curso, $semestrecurso, @protocolo)";

			try{
				$db = $this->conn->prepare($sql);
				$db->execute();

				$retorno = $db->fetch(PDO::FETCH_ASSOC);

				$protocolo = $retorno['PROTOCOLO'];

				$sql = "SELECT * FROM PESSOA INNER JOIN PESSOA_CURSO ON PESSOA_ID = ID_PESSOA 
				INNER JOIN ETEC_CURSOS ON ETEC_CURSO_ID = PESSOA_CURSO.ID_CURSO INNER JOIN ETEC ON ID_ETEC = ETEC_ID where PESSOA_PROTOCOLO like '$protocolo'";

				$db = $this->conn->prepare($sql);

				$db->execute();

				$linha = $db->fetch(PDO::FETCH_ASSOC);

				$nome =  $linha['PESSOA_NOME'];

				$etec =  $linha['ETEC_NOME'];
				$email = $linha['ETEC_EMAIL'];
				$telefone = $linha['ETEC_TELEFONE'];

				$message = "
				<head>
				<meta charset='UTF-8'>
				</head>

				<table align='center' border='0' cellpadding='0' cellspacing='0' style='width:600px'>
				<tbody>
				<tr>
				<td style='background-color:#e6e6e6;padding:10px;' align='center'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' style='width:500px'>
				<tbody>
				<tr>

				<td><img src='http://etecdev.amlconsulting.com.br/painel/dist/img/logoHeaderCLR.png' border='0' alt='' style='display:block;' width='120px;'></td>


				</tr>
				</tbody>
				</table>
				</td>
				</tr>

				<tr>
				<td style='background-color:#5F259F;padding:10px; ' align='center'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' style='width:500px'>
				<tbody>
				<tr>
				<td style='border-left:3px solid #fff;padding-left:10px;color:#fff;font-family:Arial;font-size:25px;'>PRÉ CADASTRO</td>
				</tr>

				</tbody>
				</table>
				</td>
				</tr>
				<tr>
				<td style='background-color:#e6e6e6;padding-top:30px;padding-bottom:30px;' align='center'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' style='width:550px'>
				<tbody>
				<tr>
				<td style='background-color:#fff;text-align:center;font-family:Arial;color:#fff;font-size:22px;font-weight:bold;'>
				<h4 style='background-color: #5F259F; padding: 10px; margin-top: 0;'>Solicitação:</h4>  
				</td>
				</tr>

				<tr>
				<td style='background-color:#fff;text-align:left; padding-left: 15px; padding-right: 5px;'>
				<h2 style='font-weight: normal; color: #5F259F; text-align: center; margin-top: 0; margin-bottom: 10px;'>Etec: <b><u>$etec</u></b></h2>
				<p style='font-size: 18px;'>Prezado $nome, foi feito um pré cadastro e para acessar o portal ele precisa ser completado.</p>
				<p style='font-size: 18px;'>Acesse o link e complete o seu <a href='cidadaodofuturo.com.br/cadastro.php?prt=$protocolo'>cadastro.</a></p>

				<p style='font-size: 18px;'>Qualquer dúvida entrar em contato: $telefone</p>
				<p style='font-size: 18px;'>Ou envie email: $email</p>




				<div style='display: block; width: 100%; height: 15px;'></div>
				</td>
				</tr>


				</tbody>
				</table>
				</td>
				</tr>
				<tr>
				<td style='background-color:#5F259F;padding:15px;'  align='center'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' style='width:500px'>
				<tbody>
				<tr>
				<td style='text-align: center;' >
				<table border='0' cellpadding='0' cellspacing='0' style='width:100%;text-align: center;'>
				<tbody>

				<tr>
				<td style='font-family:Arial;color:#ffffff;font-size:12px;padding-bottom:5px;' valign='top'><a href='' style='text-decoration:none;color:#ffffff'>http://www.cidadaodofuturo.com.br/</a></td>
				</tr>
				</tbody>
				</table>
				</td>

				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>

				";

				$to = $email;
				$subject = 'Senha portal Cidadão do Futuro';
				$headers = "From: " . "contato@cidadaodofuturo.com.br" . "\r\n";
				// $headers .= "CC: $email\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				$mailSend = mail($to, $subject, $message, $headers);

				if($mailSend) {
					echo "true";
				} 
				else {
					echo "Erro ao enviar o Email.";
				}

			}
			catch(PDOException $ex){
				echo 'false';
				return "Erro ao cadastrar, Erro: ".$ex->getMessage();
			}
		}
	}
	?>