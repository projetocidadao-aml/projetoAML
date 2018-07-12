	
<div class="container">
	<div class="row">
		<div class="col-12">
			<img src="./dist/img/logo.png" class="img-thumbnail img-responsive float-left" style="width: 140px;">
			<h2 class="text-center mt-5">Cadastro de ETEC's</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-12 border mt-5 p-4">
			<form>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="nomeEtec">Nome ETEC</label>
						<input type="name" class="form-control" id="nomeEtec" name="nomeEtec" placeholder="Etec Jaraguá">
					</div>
					<div class="form-group col-md-4">
						<label for="emailEtec">Email</label>
						<input type="email" class="form-control" id="emailEtec" name="emailEtec" placeholder="etecjaragua@cps.com.br">
					</div>
					<div class="form-group col-md-2">
						<label for="cepEtec">CEP</label>
						<input type="password" class="form-control" id="cepEtec" name="cepEtec" placeholder="01.047-000">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="enderecoEtec">Endereço</label>
						<input type="text" class="form-control" id="enderecoEtec" name="enderecoEtec" placeholder="Rua Jabuiutí, n° 104">
					</div>
					<div class="form-group col-md-4">
						<label for="cidadeEtec">Cidade</label>
						<input type="text" class="form-control" id="cidadeEtec" name="cidadeEtec" placeholder="São Paulo">
					</div>
					<div class="form-group col-md-2">
						<label for="ufEtec">UF</label>
						<select id="ufEtec" name="ufEtec" class="form-control">
							<option selected>Selecione...</option>
							<option>SP</option>
							<option>RJ</option>
							<option>MG</option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="usuarioEtec">Usuário</label>
						<input type="text" class="form-control" id="usuarioEtec" name="usuarioEtec" placeholder="etecjaragua">
					</div>
					<div class="form-group col-md-4">
						<label for="senhaEtec">Senha</label>
						<input type="text" class="form-control" id="senhaEtec" name="senhaEtec" placeholder="etecCtps@@201832">
					</div>
					<div class="form-group col-md-2">
						<label for="telefoneEtec">Telefone</label>
						<input type="text" class="form-control" id="telefoneEtec" name="telefoneEtec" placeholder="(11) 4302-2301">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="diretorEtec">Diretor(a)</label>
						<input type="text" class="form-control" id="diretorEtec" name="diretorEtec" placeholder="Maria Fortunato Lopes">
					</div>
					<div class="form-group col-md-6">
						<label for="responsavelEtec">Responsável</label>
						<input type="text" class="form-control" id="responsavelEtec" name="responsavelEtec" placeholder="José Luís">
					</div>
				</div>
				<div class="buttons text-center mt-2">
					<button type="submit" class="btn btn-secondary">Cadastrar</button>
					<button type="submit" class="btn btn-danger">Cancelar</button>
				</div>

			</form>		
		</div>																		
	</div>
</div>
<!-- Container -->