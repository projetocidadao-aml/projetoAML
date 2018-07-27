$(document).ready(function(){
	$(".aml-form").submit(function(){
		carregando();
		usuario = $("#usuario").val();
		pass = $("#senha").val();
		console.log(usuario+" "+pass);
		$.post("control/login.class.php",
			{
				user: usuario, pass: pass	
			},
			function(data){
				if(data == 'true'){
					window.location.href = "?page=painel";
				}
				else{
					parar();
					swal({
					  title: "Erro de Login",
					  text: "Usuario e/ou Senha incorretos!",
					  icon: "success",
					});
				}
			});
		return false;
	});
});