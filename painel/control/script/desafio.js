$(document).ready(function(){
	$(".form-desafio").submit(function(){
		cadastraCurso();
		return false;
	})
});

function cadastraCurso(){
	id = $("#desafio_id").val();
	tema = $("#desafio_tema").val();
	dataFinal = $("#desafio_dataFinalizacao").val();
	descricao = $("#desafio_descricao").val();
	$.post("control/desafio.class.php",
	{
		id: id, tema: tema, data: dataFinal, descricao: descricao
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