$(document).ready(function(){
	$(".x-form-cadastro-full").submit(function(){
		capturaValores();
		return false;
	});

	$(".form-preCadastro").submit(function(){
		capturaValoresPreCadastro();
		return false;
	});



});

function capturaValores(){
	carregando();
	nome = $("#cad_pessoa_nome").val();
	apelido = $("#cad_pessoa_apelido").val();
	cpf =  $("#cad_pessoa_cpf").val();
	email = $("#cad_pessoa_email").val();
	cidade = $("#cadastro_celular_pessoa").val();
	telefone = $("#cadastro_celular_pessoa").val();
	status = $("#cad_pessoa_status").val();
	usuario = $("#cad_pessoa_usuario").val();
	senha = $("#cad_pessoa_senha").val();
	perfil = $("#cad_pessoa_perfil").val();
	descricao = $("#cad_pessoa_descricao").val();
	protocolo = $("#cad_pessoa_protocolo").val();
	obs = $("#cad_pessoa_obs").val();
	$.post("control/cadastroPessoa.class.php",
	{
		cad_pessoa_nome: nome, cad_pessoa_apelido: apelido, cad_pessoa_cpf: cpf, 
		cad_pessoa_email: email, cadastro_celular_pessoa: telefone, cad_pessoa_status: status, 
		cad_pessoa_usuario: usuario,  cad_pessoa_senha: senha, cad_pessoa_perfil: perfil,
		cad_pessoa_descricao: descricao, cad_pessoa_protocolo: protocolo,cad_pessoa_obs: obs
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
}


function capturaValoresPreCadastro(){
	carregando();

	nome = $("#nomePessoa").val();
	email = $("#emailPessoa").val();
	cpf =  $("#preCad_pessoa_cpf").val();
	curso =  $("#cursoPessoa").val();
	semestre =  $("#semestrePessoa").val();

	$.post("control/preCadastroPessoa.class.php",
	{
		nome: nome, email: email, cpf: cpf, 
		curso: curso, semestre: semestre
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
		}

		else if(data == 'Erro ao enviar o Email.'){
			parar();
			swal({
				title: "Sucesso",
				text: "Cadastrado com Sucesso. O Email não foi enviado.\nReenviar Email",
				icon: "info",
			});
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
}










