<?php
session_start();
$retorno[] = array('idUser'=>utf8_encode($_SESSION['idUser']), 
   'nomeEtec'=> utf8_encode($_SESSION['nomeEtec']), 
   'nomeDiretor'=> utf8_encode($_SESSION['nomeDiretor']), 
   'nomeResponsavel'=> utf8_encode($_SESSION['nomeResponsavel']),
   'nomeUsuario'=>utf8_encode($_SESSION['nomeUsuario']), 
   'senhaEtec'=> utf8_encode($_SESSION['senhaEtec']), 
   'cepEtec'=> utf8_encode($_SESSION['cepEtec']), 
   'logradouroEtec'=> utf8_encode($_SESSION['logradouroEtec']), 
   'cidadeEtec'=> utf8_encode($_SESSION['cidadeEtec']), 
   'bairroEtec'=> utf8_encode($_SESSION['bairroEtec']), 
   'emailEtec'=> utf8_encode($_SESSION['emailEtec']), 
   'ufEtec'=> utf8_encode($_SESSION['ufEtec']), 
   'telefoneEtec'=>utf8_encode($_SESSION['telefoneEtec']));
echo json_encode($retorno);

?>
