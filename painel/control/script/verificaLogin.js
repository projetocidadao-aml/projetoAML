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
				parar();
				console.log("Foi");
			}
			else{
				console.log("Não foi");

				swal("Login Etec", 'Usuário ou senha incorretos.', "error");

				parar();

			}
		});
		return false;
	})
});