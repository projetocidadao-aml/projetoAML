<?php
	 //Config de Routers
	 
	 class routers{
 		function __construct($loged_status){
 			if(isset($_GET['page']))
 			{
 				//Se tiver uma rota na url da página ele adiciona uma das views
				$page = $_GET['page'];
 				if ($loged_status == "login") {
 					if ($page != 'login') {
 						include "view/".$page.".html";
 					}
 				}
 				else{
					include "view/".$page.".html";
 				}
 			}
 			else
 			{
 				//Se não tiver rota na url da página ele adiciona a pagina inicial
 				include "view/index.html";
 			}
 		}
 	}
