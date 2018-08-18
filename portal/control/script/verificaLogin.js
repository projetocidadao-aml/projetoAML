$(document).ready(function(){
	$(".formLogCli").submit(function(){
		carregando();
		email = $("[name='emailLog']").val();
		pass = $("[name='senha']").val();
		console.log(email+" "+pass);
		$.post("control/login.class.php",
			{
				email: email, pass: pass	
			},
			function(data){
                parar();
				if(data == 'true'){
					window.location.href = "?page=aluno";
				}
				else{
					parar();
					swal({
					  title: "Erro de Login",
					  text: "Usuario e/ou Senha incorretos!",
					  icon: "error",
					});
				}
                console.log(data);
			});
		return false;
	});
});