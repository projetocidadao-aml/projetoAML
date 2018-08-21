$(document).ready(function(){
	$(".aml-form").submit(function(){
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

	console.log(nome);
	console.log(email);
	console.log(cep);
	console.log(endereco);
	console.log(cidade);
	console.log(uf);
	console.log(usuario);
	console.log(senha);
	console.log(telefone);
	console.log(diretor);
	console.log(responsavel);
}