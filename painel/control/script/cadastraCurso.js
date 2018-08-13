$(document).ready(function(){
	$(".form-cadastra-curso").submit(function(){
        cadastraCurso();
		return false;
	})
});

function cadastraCurso(){
	curso = $("#cursos_nome_curso").val();
	duracao = $("#cursos_duracao_curso").val();
    $.post("control/curso.class.php",
			{
				curso: curso, duracao: duracao
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