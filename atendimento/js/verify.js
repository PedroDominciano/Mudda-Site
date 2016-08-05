function verificar(){
	var formulario = document.getElementById("formulario");
	valida_nomes(formulario);
	
	if(!valida_form()){
		document.getElementById("inp-email").focus();
	}
}

function valida_form (){
	var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	if(!filter.test(document.getElementById("inp-email").value))
	{
		console.log("Favor verificar o email");
		return false
	}
	return true;
}

function valida_nomes(formulario){	
	var regex = /^[a-zA-Zéíçã]+$/;
	var nome = formulario.nome.value;
	var sobreNome = formulario.sobrenome.value;
	var assunto = formulario.ass.value;
	if(!regex.test(nome)){
		console.log("erro no nome");
		show_error(formulario.nome);
	}
	if(!regex.test(sobreNome)){
		console.log(sobreNome);
		console.log("erro no sobrenome");
		show_error(formulario.sobrenome);
	}
	if(!regex.test(assunto)){
		console.log("erro no assunto");
		show_error(formulario.ass);
	}
}

function show_error(campo){
	var id = campo.id;
	document.getElementById(id).value='';
	document.getElementById(id).style.backgroundColor = "#FF6666";
}

function countChar(val){
	var max = 200;
	var tam = val.value.length;
	console.log(tam);
	if(tam > max){
		return false;
	}else{
		document.getElementById("p-chars").innerHTML = max - tam;
	}
}
