<?php
header('Content-Type: text/html; charset=utf-8');
include 'control/router.class.php';
include 'control/dal.class.php';
$dalGeral = new dalGeral();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cidadão do Futuro</title>
	<link rel="stylesheet" href="dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<link rel="apple-touch-icon" sizes="57x57" href="dist/img/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="dist/img/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="dist/img/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="dist/img/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="dist/img/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="dist/img/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="dist/img/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="dist/img/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="dist/img/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="dist/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="dist/img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="dist/img/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="dist/img/icons/favicon-16x16.png">
	<link rel="manifest" href="dist/img/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="dist/img/icons/ms-icon-144x144.png">

	
	<meta name="theme-color" content="#5F259F">

	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript">
		$(document).ready( function () {
			$('.table').DataTable({
				language:{
					"sEmptyTable": "Nenhum registro encontrado",
					"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
					"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
					"sInfoFiltered": "(Filtrados de _MAX_ registros)",
					"sInfoPostFix": "",
					"sInfoThousands": ".",
					"sLengthMenu": "Mostrar _MENU_  Resultados por página",
					"sLoadingRecords": "Carregando...",
					"sProcessing": "Processando...",
					"sZeroRecords": "Nenhum registro encontrado",
					"sSearch": "Pesquisar: ",
					"oPaginate": {
						"sNext": "Próximo",
						"sPrevious": "Anterior",
						"sFirst": "Primeiro",
						"sLast": "Último"
					},
					"oAria": {
						"sSortAscending": ": Ordenar colunas de forma ascendente",
						"sSortDescending": ": Ordenar colunas de forma descendente"
					}
				}
			});
		} );




	</script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark mb-4">
		<div class="container">
			<a class="navbar-brand" href="index.php?page=painel"><img src="dist/img/logoHeaderCut.png" id="imgHeader"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=meus_dados">Meus Dados</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=grupos">Grupos</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Cadastros
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?page=cadastro_pessoa">Pessoas</a>
							<a class="dropdown-item" href="index.php?page=cursos">Cursos</a>

						</div>
					</li>
<!-- 					<li class="nav-item">
						<a class="nav-link" href="index.php?page=desafio">Desafios</a>
					</li>
					 -->
					<!-- <li class="nav-item">
						<a class="nav-link" href="#">Relatórios</a>
					</li> -->

					<li class="nav-item">
						<a class="nav-link" href="control/deslogar.php">Sair</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<?php 
	new routers('painel');
	?>

	<footer class="footer navbar navbar-expand-lg navbar-dark">
		<div class="container">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php?page=contato">Contato</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?page=privacidade">Privacidade</a>
				</li>
			</ul>
		</div>
	</footer>
</body>

<script src="./dist/js/abasCadastro.js"></script>
</html>