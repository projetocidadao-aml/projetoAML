$(document).ready(function(){
	$(".aml-form").submit(function(){
        capturaValores();
		$.post("control/cadastroDesafio.class.php",
			{
				tema: tema, descricao: descricao
			},
			function(data){
				console.log(data);
			});
		return false;
	})
});

function capturaValores(){
	tema = $("#temaDesafio").val();
	descricao = $("#descricaoDesafio").val();
}