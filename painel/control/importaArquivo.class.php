<?php 

$curso = 0;
$semestre = 0;
$perfil = 3; //Aluno
$codEtec = 0;


$arquivo = $_FILES["upload_lista_pessoas"]["tmp_name"];
$nome = $_FILES["upload_lista_pessoas"]["name"];


$arq = Array();
$file = fopen($arquivo, 'r');
while (($line = fgetcsv($file)) !== false)
{
	$arq[] = $line;
}
fclose($file);
// var_dump($arq);



for ($i=1; $i < count($arq) ; $i++) { 
	$nome = $arq[$i][0];
	$email = $arq[$i][1];
	$cpf = $arq[$i][2];

	$protocolo = $codEtec.date('YmdHis').'-'.substr($cpf, -2);

	$sql = "INSERT INTO PESSOA (PESSOA_NOME, PESSOA_EMAIL, PESSOA_CPF, PESSOA_DATA_CADASTRO, 
	PESSOA_PROTOCOLO, ID_PERFIL)
	VALUES
	('$nome','$email', '$cpf', NOW(), '$protocolo', $perfil )";



	$sql2 = "INSERT INTO PESSOA_CURSO (ID_PESSOA, '$curso', '$semestre') VALUES (@idPessoa, IDCURSO, SEMESTRE)";

	echo $sql."<br>";

	echo $sql2."<br>";
}





?>