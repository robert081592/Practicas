<?php 


	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	$resultado = $peso	/ ($altura * $altura);

	echo "Su IMC es de:",  $resultado;

 ?>

