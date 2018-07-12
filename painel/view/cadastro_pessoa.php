
<div class="container">
	<div class="row">
		<div class="col-12">
			<img src="./dist/img/logo.png" class="img-thumbnail img-responsive float-left" style="width: 140px;">
			<h2 class="text-center mt-5">Cadastro</h2>
		</div>
	</div>

	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pré Cadastro</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Buscar</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cadastro</a>
		</li>
	</ul>
	<div class="tab-content" id="pills-tabContent">
		<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

			<div class="row">
				<div class="col-12 border mt-5 p-4">
					<h2 class="text-center text-secondary mb-5">Pré Cadastro</h2>

					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="nomePessoa">Nome</label>
								<input type="name" class="form-control" id="nomePessoa" name="nomePessoa" placeholder="Pedro Travalon Tavares">
							</div>
							<div class="form-group col-md-6">
								<label for="nomePessoa">Email</label>
								<input type="email" class="form-control" id="nomePessoa" name="nomePessoa" placeholder="Pedro Travalon Tavares">
							</div>

						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="nomePessoa">Perfil</label>
								<select class="form-control">
									<option>Selecione...</option>
								</select>
							</div>
							<div class="form-group col-md-8">
								<label for="nomePessoa">Observações</label>
								<input type="email" class="form-control" id="nomePessoa" name="nomePessoa" placeholder="Pedro Travalon Tavares">
							</div>

						</div>


						<div class="buttons text-center mt-2">
							<button type="submit" class="btn btn-secondary">Cadastrar</button>
							<button type="submit" class="btn btn-danger">Cancelar</button>
						</div>

					</form>		

				</div>

				<div class="col-12 border mt-5 p-4">
					<h2 class="text-center text-secondary mb-5">Upload de Listas</h2>

					<form>

						<div class="form-row">
							<div class="form-group col-md-8">
								<label for="nomePessoa">Curso</label>
								<select class="form-control">
									<option>Selecione...</option>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="nomePessoa">Semestre</label>
								<select class="form-control">
									<option>Selecione...</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="nomePessoa">Curso</label>
								<input type="file" name="" class="form-control">
							</div>
							
						</div>



						<div class="buttons text-center mt-2">
							<button type="submit" class="btn btn-secondary">Subir o Arquivo</button>
						</div>

					</form>		


				</div>
			</div>

		</div>
		<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
			<div class="row">
				<div class="col-12 border mt-5 p-4">
					<h2 class="text-center text-secondary mb-5">Buscar Pessoas</h2>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="apelidoPessoa">Nome</label>
							<input type="text" class="form-control" name="">
						</div>
						<div class="form-group col-md-6">
							<label for="apelidoPessoa">Curso</label>
							<select class="form-control">
								<option>Selecione...</option>
							</select>
						</div>
					</div>

					<div class="buttons text-center mt-2">
						<button type="submit" class="btn btn-secondary">Buscar</button>
					</div>


					<h3 class="text-center text-secondary mt-4 mb-4">Pessoas</h3>
					<div class="table-responsive ">
						<table class="table table-striped">
							<thead>
								<th>#</th>
								<th>Nome</th>
								<th>Perfil</th>
								<th>Etec</th>
								<th>Grupo</th>
								<th>Ações</th>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Alex Santos</td>
									<td>Aluno</td>
									<td>Jaraguá</td>
									<td>NoGroup</td>
									<td><button class="btn btn-secondary">Alterar</button></td>
								</tr>

								<tr>
									<td>2</td>
									<td>Gustavo Silva</td>
									<td>Aluno</td>
									<td>Jaraguá</td>
									<td>NoGroup</td>
									<td><button class="btn btn-secondary">Alterar</button></td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
			<div class="row">
				<div class="col-12 border mt-5 p-4">
					<h2 class="text-center text-secondary mb-5">Cadastro de Pessoas</h2>

					<form>
						<div class="form-row">
							<div class="form-group col-md-5">
								<label for="nomePessoa">Nome</label>
								<input type="name" class="form-control" id="nomePessoa" name="nomePessoa" placeholder="Pedro Travalon Tavares">
							</div>
							<div class="form-group col-md-4">
								<label for="apelidoPessoa">Apelido</label>
								<input type="email" class="form-control" id="apelidoPessoa" name="apelidoPessoa" placeholder="Pedrinho">
							</div>

							<div class="form-group col-md-3">
								<label for="apelidoPessoa">CPF</label>
								<input type="email" class="form-control" id="apelidoPessoa" name="apelidoPessoa" placeholder="300.002.123-23">
							</div>

						</div>

						<div class="form-row">
							<div class="form-group col-md-5">
								<label for="emailPessoa">Email</label>
								<input type="email" class="form-control" id="emailPessoa" name="emailPessoa" placeholder="pedrinho_tavares91@gmail.com">
							</div>
							<div class="form-group col-md-4">
								<label for="celularPessoa">Celular</label>
								<input type="tel" class="form-control" id="celularPessoa" name="celularPessoa" placeholder="(11) 97834-2343">
							</div>

							<div class="form-group col-md-3">
								<label for="cpfPessoa">Status</label>
								<select class="form-control">
									<option>Selecione...</option>
								</select>
							</div>

						</div>

						<div class="form-row">
							<div class="form-group col-md-5">
								<label for="usuarioPessoa">Usuário</label>
								<input type="text" class="form-control" id="usuarioPessoa" name="usuarioPessoa" placeholder="pedrinho_tavares91">
							</div>
							<div class="form-group col-md-4">
								<label for="senhaPessoa">Senha</label>
								<input type="text" class="form-control" id="senhaPessoa" name="senhaPessoa" placeholder="hexx201899288301@1">
							</div>

							<div class="form-group col-md-3">
								<label for="cpfPessoa">Perfil</label>
								<select class="form-control">
									<option>Selecione...</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="descricaoPessoa">Descrição</label>
								<textarea class="form-control" id="descricaoPessoa" name="Estudante acima da média." rows="2"></textarea>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="usuarioPessoa">Protocolo</label>
								<input type="text" class="form-control" id="usuarioPessoa" name="usuarioPessoa" placeholder="1812018100701461022">
							</div>
							<div class="form-group col-md-8">
								<label for="senhaPessoa">Observações</label>
								<input type="text" class="form-control" id="senhaPessoa" name="senhaPessoa" placeholder="Aluno Destaque 2017">
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
	</div>


</div>



