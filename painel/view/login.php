	
	<div class="container">
		<h4 class="text-secondary text-center pt-4">Cadastre-se! Vamos agir por um amanhã melhor!</h4>

		<div class="row">
			
			<div class="col-md-6 d-flex align-items-center">
				<div class="row m-auto">
					<div class="col-12 px-5 py-2 border">
						<h3 class="text-center text-secondary">Acessar</h3>
						<form action="index.php?page=painel" method="POST">

							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="usuario">Usuário / Email</label>
									<input type="name" class="form-control" id="usuario" name="usuario" placeholder="pedrotavares93">
								</div>
								<div class="form-group col-md-12">
									<label for="senha">Senha</label>
									<input type="password" class="form-control" id="senha" name="senha" placeholder="*******">
								</div>
							</div>
							
							<div class="text-center">
								<input type="submit" class="btn btn-secondary px-4 py-2 mb-3" value="Entrar">
							</div>
						</form>

						<div class="text-center">

							<a href="./index.php?page=cadastro_etec" class="d-block mb-3">Cadastre-se</a>
							<a href="#" class="d-block mb-3" id="forgotPassword">Esqueci a Senha</a>
						</div>

					</div>

				</div>
			</div>
			<!-- esquerda -->

			<div class="col-6" id="imgIndex">
				<img src="./dist/img/logo.png" class="img-thumbnail img-responsive border-0">
			</div>

		</div>

	</div>
	<!-- Container -->




	<div class="modal fade" id="senhaModal" tabindex="-1" role="dialog" aria-labelledby="FprgotPassword" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content px-3 py-3">
				<div class="modalTitulo">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="">Esqueci a Senha</h4>
				</div>
				<div class="modal-body">
					<p>Digite o email que está cadastrado para recriar a sua senha.</p>
					<form class="">
						<div class="form-group">
							<input type="text" class="form-control" name="emailSenha" placeholder="Email">
						</div>


						<input type="submit" class="btn btn-secondary" value="Enviar">
						
						<label class="returnFormLogCli"></label>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		$("#forgotPassword").click(function(){
			$("#senhaModal").modal();
		});
	</script>
