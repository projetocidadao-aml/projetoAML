$(document).ready(function(){
	$(".form-cadastra-curso").submit(function(){
		cadastraCurso();
		return false;
	});

	$(".form-associa-curso").submit(function(){
		associaCurso();
		return false;
	});
});





function cadastraCurso(){
	carregando();
	
	id = $("#cursos_id_curso").val();
	curso = $("#cursos_nome_curso").val();
	duracao = $("#cursos_duracao_curso").val();
	$.post("control/curso.class.php",
	{
		id: id, curso: curso, duracao: duracao
	},
	function(data){
		console.log(data);
		if(data == 'true'){
			parar();
			swal({
				title: "Cadastro",
				text: "Cadastro realizado com sucesso!",
				icon: "success",
			});
			setTimeout(function(){
				window.location.reload();

			}, 2000)

		}
		else if(data == 'altrue'){

			parar();
			swal({
				title: "Alteração",
				text: "Alteração realizada com sucesso!",
				icon: "success",
			});
			setTimeout(function(){
				window.location.reload();

			}, 2000)


		}
		else if(data == 'alfalse'){
			parar();
			swal({
				title: "Alteração",
				text: "Erro ao alterar dados!",
				icon: "error",
			});

		}
		else{
			parar();
			swal({
				title: "Cadastro",
				text: "Erro ao cadastrar dados!",
				icon: "error",
			});
		}
	});
}

function associaCurso(){
	carregando();

	id = $("#associacao_id_curso").val();
	curso = $("#associacao_nome_curso").val();
	periodo = $("#associacao_periodo_curso").val();
	$.post("control/associaCurso.class.php",
	{
		id: id, curso: curso, periodo: periodo
	},
	function(data){
		console.log(data);
		if(data == 'true'){
			parar();
			swal({
				title: "Cadastro",
				text: "Cadastro realizado com sucesso!",
				icon: "success",
			});
			setTimeout(function(){
				window.location.reload();

			}, 2000)

		}
		else if(data == 'altrue'){

			parar();
			swal({
				title: "Alteração",
				text: "Alteração realizada com sucesso!",
				icon: "success",
			});
			setTimeout(function(){
				window.location.reload();

			}, 2000)


		}
		else if(data == 'alfalse'){
			parar();
			swal({
				title: "Alteração",
				text: "Erro ao alterar dados!",
				icon: "error",
			});

		}
		else{
			parar();
			swal({
				title: "Cadastro",
				text: "Erro ao cadastrar dados!",
				icon: "error",
			});
		}
	});
}