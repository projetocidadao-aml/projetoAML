var options2 = {
	onKeyPress: function (cpf, ev, el, op) {
		var masks = ['(00) 0000-00000', '(00) 00000-0000'],
		mask = (cpf.length > 14) ? masks[1] : masks[0];
		el.mask(mask, op);
	}
}

function fnCep(cep){

	cep = cep.replace(".", "").replace("-","");

	var oPagina = new XMLHttpRequest();

	with (oPagina){
		open('GET', "https://viacep.com.br/ws/"+cep+"/json/");

		send();

		onload = function(){
			var oDados = JSON.parse(responseText);

			document.all.enderecoEtec.value = oDados.logradouro + ", N° ";
			document.all.cidadeEtec.value = oDados.localidade;
			document.all.bairroEtec.value = oDados.bairro;
			document.all.ufEtec.value = oDados.uf;
			document.all.enderecoEtec.focus();

		}
	}

}

$("#cepEtec").keyup(function(){
	if ($(this).val().length == 10) fnCep($(this).val());
});


$('#telefoneEtec').mask('(00) 0000-00000', options2);
$('#cadastro_celular_pessoa').mask('(00) 0000-00000', options2);

$('#cepEtec').mask('00.000-000');
$('#cad_pessoa_cpf').mask('000.000.000-00');


