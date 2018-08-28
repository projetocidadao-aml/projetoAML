$(document).ready(function(){
	$(".aml-form").submit(function(){
		carregando();
		capturaValores();
		$.post("./control/cadastroEtec.class.php",
		{
			nomeEtec: nome, emailEtec: email, cepEtec: cep, 
			enderecoEtec: endereco, cidadeEtec: cidade, ufEtec: uf, 
			usuarioEtec: usuario,  senhaEtec: senha, telefoneEtec: telefone,
			diretorEtec: diretor, responsavelEtec: responsavel
		},
		function(data){
			console.log(data);
			if(data == 'true'){
				parar();
				swal({
					title: "Sucesso",
					text: "Cadastrado com Sucesso",
					icon: "success",
				});

				setTimeout(function(){
					window.location.reload();

				}, 2000);
			}
			else{
				parar();
				swal({
					title: "Erro",
					text: "Erro ao cadastrar",
					icon: "error",
				});
			}
		});
		return false;
	})
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