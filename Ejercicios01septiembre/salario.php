<?php 

	$hrs = $_POST['hrs'];
	$basico = 25;

	$salario = $basico * $hrs;
	$inss = $salario * 0.15;
	$ir = $salario * 0.3;
	$salneto = $salario - $inss - $ir;
	echo "Detalles de salario:<br/> ";
	echo "<br/>Salario por horas digitadas:",$salario;
	echo "<br/>Inss: ", $inss ;
	echo "<br/>Ir: ", $ir;
	echo "<br/>Salario neto: ", $salneto;

 ?>