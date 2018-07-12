
<div class="container">
	<div class="row">
		<div class="col-12">
			<img src="./dist/img/logo.png" class="img-thumbnail img-responsive float-left" style="width: 140px;">
			<h2 class="text-center mt-5">Cursos</h2>
		</div>
	</div>

	<ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cadastro</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Associação</a>
		</li>
		
	</ul>
	<div class="tab-content" id="pills-tabContent">
		<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			<div class="row">
				<div class="col-12 border mt-5 p-4">
					<h2 class="text-center text-secondary mb-5">Cadastro de Cursos</h2>

					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="nomePessoa">Curso</label>
								<input type="name" class="form-control" id="nomePessoa" name="nomePessoa" placeholder="Pedro Travalon Tavares">
							</div>
							<div class="form-group col-md-6">
								<label for="apelidoPessoa">Duração</label>
								<select class="form-control">
									<option>Selecione...</option>
								</select>
							</div>

						</div>

						<div class="buttons text-center mt-2">
							<button type="submit" class="btn btn-secondary">Cadastrar</button>
							<button type="submit" class="btn btn-danger">Cancelar</button>
						</div>

					</form>		

					<h2 class="text-center text-white mt-4 mb-4 bg-secondary">Cursos Cadastrados</h2>
					<div class="table-responsive ">
						<table class="table table-striped">
							<thead>
								<th>#</th>
								<th>Curso</th>
								<th>Duração</th>
								<th>Ações</th>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Informática para Internet</td>
									<td>3 Semestres</td>
									<td><button class="btn btn-secondary">Alterar</button></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Logística</td>
									<td>3 Semestres</td>
									<td><button class="btn btn-secondary">Alterar</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>	
			
		</div>
		<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
			<div class="row">
				<div class="col-12 border mt-5 p-4">
					<h2 class="text-center text-secondary mb-5">Associação de Cursos</h2>

					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="apelidoPessoa">Curso</label>
								<select class="form-control">
									<option>Selecione...</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label for="apelidoPessoa">Período</label>
								<select class="form-control">
									<option>Selecione...</option>
								</select>
							</div>

						</div>

						<div class="buttons text-center mt-2">
							<button type="submit" class="btn btn-secondary">Cadastrar</button>
							<button type="submit" class="btn btn-danger">Cancelar</button>
						</div>

					</form>		

					<h2 class="text-center text-white mt-4 mb-4 bg-secondary">Cursos Cadastrados</h2>
					<div class="table-responsive ">
						<table class="table table-striped">
							<thead>
								<th>#</th>
								<th>Curso</th>
								<th>Período</th>
								<th>Ações</th>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Informática para Internet</td>
									<td>Noturno</td>
									<td><button class="btn btn-secondary">Alterar</button></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Logística</td>
									<td>Diúrno</td>
									<td><button class="btn btn-secondary">Alterar</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
	</div>





</div>
</div>
<!-- Container -->






