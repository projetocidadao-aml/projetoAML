$.get( "control/retornaDadosEtec.class.php", function( data ) {
var response = JSON.parse(data);
document.getElementById('nomeEtec').value = response[0].nomeEtec; 
document.getElementById('emailEtec').value = response[0].emailEtec;
document.getElementById('enderecoEtec').value = response[0].logradouroEtec;
document.getElementById('bairroEtec').value = response[0].bairroEtec;
document.getElementById('cidadeEtec').value = response[0].cidadeEtec;
document.getElementById('usuarioEtec').value = response[0].nomeUsuario;
document.getElementById('senhaEtec').value = response[0].senhaEtec;
document.getElementById('responsavelEtec').value = response[0].nomeResponsavel;
document.getElementById('diretorEtec').value = response[0].nomeDiretor;
document.getElementById('telefoneEtec').value = response[0].telefoneEtec;
document.getElementById('cepEtec').value = response[0].cepEtec;
document.getElementById('ufEtec').value = response[0].ufEtec;
});
