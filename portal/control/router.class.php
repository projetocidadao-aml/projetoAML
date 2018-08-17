<?php
	 //Config de Routers
	 
	 class routers{
 		function __construct($loged_status){
 			if(isset($_GET['page']))
 			{
 				//Se tiver uma rota na url da página ele adiciona uma das views
				$page = $_GET['page'];
 				if ($loged_status == "index") {
 					if ($page == 'index' || $page == 'contato' || $page == 'desafios' || $page == 'privacidade' || $page == 'regulamento') {
						include "view/".$page.".html";
 					}
					 else{
						header("location:index.php");
					 }
 				} else{
					include "view/".$page.".html";
				 }
 			}
 			else
 			{
 				//Se não tiver rota na url da página ele adiciona a pagina inicial
 				include "view/".$loged_status.".html";
 			}
 		}
 	}
