$(document).ready(function(){
	$('.carousel').carousel({
	  interval: 2500
	});
 });
 
function calcularIMC(){
	var peso = document.imc.peso.value;
	var altura = document.imc.altura.value;

	if(!peso){
		alert("Informe o peso");		
		return;
	}

	if(!altura){
		alert("Informe a altura");		
		return;
	}

	var quadrado = (altura * altura);
	var calculo = (peso/quadrado);

	var result = document.getElementById("result");
	result.innerHTML = "<strong>Calculado!</strong> Seu IMC é "+ calculo.toFixed(2) + ", confira a tabela ao lado para saber sua situação!";
	result.style.display = 'block';

	removeClassImc();

	if(calculo<17){
		document.getElementById("imcOption1").classList.add('alert');
		document.getElementById("imcOption1").classList.add('alert-danger');
	}
	else if(calculo<18.5){
		document.getElementById("imcOption2").classList.add('alert');
		document.getElementById("imcOption2").classList.add('alert-warning');
	}
	else if(calculo>=18.5 && calculo<25){
		document.getElementById("imcOption3").classList.add('alert');
		document.getElementById("imcOption3").classList.add('alert-success');
	}
	else if(calculo>=25 && calculo<30) {
		document.getElementById("imcOption4").classList.add('alert');
		document.getElementById("imcOption4").classList.add('alert-warning');
	}
	else if(calculo>=30 && calculo<35) {
		document.getElementById("imcOption5").classList.add('alert');
		document.getElementById("imcOption5").classList.add('alert-danger');
	}
	else if(calculo>=35 && calculo<40) {
		document.getElementById("imcOption6").classList.add('alert');
		document.getElementById("imcOption6").classList.add('alert-danger');
	}
	else if (calculo=>40){
		document.getElementById("imcOption7").classList.add('alert');
		document.getElementById("imcOption7").classList.add('alert-danger');
	}
}

function removeClassImc(){
	document.getElementById("imcOption1").removeAttribute("class");
	document.getElementById("imcOption2").removeAttribute("class");
	document.getElementById("imcOption3").removeAttribute("class");
	document.getElementById("imcOption4").removeAttribute("class");
	document.getElementById("imcOption5").removeAttribute("class");
	document.getElementById("imcOption6").removeAttribute("class");
	document.getElementById("imcOption7").removeAttribute("class");
}
