<?php
	include 'control/router.class.php';
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
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark mb-4">
		<div class="container">
			<a class="navbar-brand" href="index.php">Cidadão do Futuro</a>
		</div>
	</nav>


	<?php 
		new routers('login');
	?>

	<footer class="footer navbar navbar-expand-lg navbar-dark">
		<div class="container">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Contato</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Privacidade</a>
				</li>
			</ul>
		</div>
</footer>
	<script>
		$("#forgotPassword").click(function(){
			$("#senhaModal").modal();
		});
	</script>




</body>
</html>