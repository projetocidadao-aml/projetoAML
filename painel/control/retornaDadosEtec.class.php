<?php
session_start();
$retorno[] = array('idUser'=>$_SESSION['idUser'], 
   'nomeEtec'=> $_SESSION['nomeEtec'], 
   'nomeDiretor'=> $_SESSION['nomeDiretor'], 
   'nomeResponsavel'=> $_SESSION['nomeResponsavel'],
   'nomeUsuario'=>$_SESSION['nomeUsuario'], 
   'senhaEtec'=> $_SESSION['senhaEtec'], 
   'cepEtec'=> $_SESSION['cepEtec'], 
   'logradouroEtec'=> $_SESSION['logradouroEtec'], 
   'cidadeEtec'=> $_SESSION['cidadeEtec'], 
   'bairroEtec'=> $_SESSION['bairroEtec'], 
   'emailEtec'=> $_SESSION['emailEtec'], 
   'ufEtec'=> $_SESSION['ufEtec'], 
   'telefoneEtec'=>$_SESSION['telefoneEtec']);
echo json_encode($retorno, JSON_UNESCAPED_UNICODE);

?>
