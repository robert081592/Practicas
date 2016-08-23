$(document).on("ready", inicio);

function inicio(){
	//al hacer click en el boton publicar
	$("#publicar").on("click", mensaje);
}

function mensaje(){

	alert("Hola Mundo");
}
