$(document).ready(function(){
	$(".aml-form").submit(function(){
		usuario = $("#usuario").val();
		pass = $("#senha").val();
		console.log(usuario+" "+pass);
		$.post("control/login.class.php",
			{
				user: usuario, pass: pass	
			},
			function(data){
				if(data == 'true'){
					console.log("Foi");
				}
				else{
					console.log("Não foi");
				}
			});
		return false;
	})
});