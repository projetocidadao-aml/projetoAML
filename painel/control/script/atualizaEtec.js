$(document).ready(function(){
	$(".aml-form").submit(function(){
		capturaValores();
		carregando();
		$.post("control/atualizarCadastroEtec.class.php",
		{
			nomeEtec: nome, emailEtec: email, cepEtec: cep, 
			enderecoEtec: endereco, cidadeEtec: cidade, bairroEtec: bairro, ufEtec: uf, 
			usuarioEtec: usuario,  senhaEtec: senha, telefoneEtec: telefone,
			diretorEtec: diretor, responsavelEtec: responsavel
		},
		function(data){
			if(data == 'true'){
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
			else{
				parar();
				swal({
					title: "Alteração",
					text: "Erro ao alterar dados!",
					icon: "error",
				});

				setTimeout(function(){
					window.location.reload();

				}, 2000)

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
	bairro = $("#bairroEtec").val();
	cidade = $("#cidadeEtec").val();
	uf = $("#ufEtec").val();
	usuario = $("#usuarioEtec").val();
	senha = $("#senhaEtec").val();
	telefone = $("#telefoneEtec").val();
	diretor = $("#diretorEtec").val();
	responsavel = $("#responsavelEtec").val();

}