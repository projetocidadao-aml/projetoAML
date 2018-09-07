$(document).ready(function(){

	$("#form_Atualiza").submit(function(){
		capturaValores();
		return false;
	});

});

function capturaValores(){
	carregando();

	id = $("#detalhamento_id").val();
	nome = $("#detalhamento_nome").val();
	apelido = $("#detalhamento_apelido").val();
	cpf =  $("#detalhamento_cpf").val();
	email = $("#detalhamento_email").val();
	telefone = $("#detalhamento_celular_pessoa").val();
	status = $("#detalhamento_status").val();
	usuario = $("#detalhamento_usuario").val();
	senha = $("#detalhamento_senha").val();
	perfil = $("#detalhamento_descricao").val();
	descricao = $("#detalhamento_descricao").val();
	obs = $("#detalhamento_obs").val();
	$.post("control/atualizaPessoa.class.php",
	{
		detalhamento_id: id, detalhamento_nome: nome, detalhamento_apelido: apelido, detalhamento_cpf: cpf, 
		detalhamento_email: email, detalhamento_celular_pessoa: telefone, detalhamento_status: status, 
		detalhamento_usuario: usuario,  detalhamento_senha: senha, detalhamento_descricao: perfil,
		detalhamento_descricao: descricao, detalhamento_obs: obs
	},
	function(data){
		console.log(data);
		if(data == 'true'){
			parar();
			swal({
				title: "Sucesso",
				text: "Atualizado com Sucesso",
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
				text: "Erro ao atualizar",
				icon: "error",
			});
		}
	});
}











