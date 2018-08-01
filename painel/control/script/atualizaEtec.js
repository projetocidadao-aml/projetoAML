$(document).ready(function(){
	$(".aml-form").submit(function(){
		capturaValores();
		carregando();
		$.post("control/atualizarCadastroEtec.class.php",
		{
			nomeEtec: nome, emailEtec: email, cepEtec: cep, 
			enderecoEtec: endereco, cidadeEtec: cidade, ufEtec: uf, 
			usuarioEtec: usuario,  senhaEtec: senha, telefoneEtec: telefone,
			diretorEtec: diretor, responsavelEtec: responsavel
		},
		function(data){
			alert(data);
			if(data == 'true'){
				parar();
				swal({
					title: "Alteração",
					text: "Alteração realizada com sucesso!",
					icon: "success",
				});

			}
			else{
				parar();
				swal({
					title: "Alteração",
					text: "Erro ao alterar dados!",
					icon: "error",
				});

			}
		});
		return false;
	});
});

function capturaValores(){
	nome = $("#nomeEtec").val();
	email = $("#emailEtec").val();
	cep =  $("#cepEtec").val();
	endereco = $("#enderecoEtec").val();
	cidade = $("#cidadeEtec").val();
	uf = $("#ufEtec").val();
	usuario = $("#usuarioEtec").val();
	senha = $("#senhaEtec").val();
	telefone = $("#telefoneEtec").val();
	diretor = $("#diretorEtec").val();
	responsavel = $("#responsavelEtec").val();
}