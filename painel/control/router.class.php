<?php
	 //Config de Routers
	 
	 class routers{
 		function __construct(){
 			if(isset($_GET['page']))
 			{
 				//Se tiver uma rota na url da página ele adiciona uma das views
				$page = $_GET['page'];
 				include "view/".$page.".html";
 			}
 			else
 			{
 				//Se não tiver rota na url da página ele adiciona a pagina inicial
 				include "view/login.html";
 			}
 		}
 	}
