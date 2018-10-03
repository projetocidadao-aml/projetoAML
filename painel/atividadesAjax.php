<?php 

session_start();

include './control/capturaAtividades.class.php';

$atividades = new capturaAtividades($_GET['paginacao']);


?>


