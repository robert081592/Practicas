<?php 
$est = 1;
while ($est<5){

	$nota1=rand(0,5);
	$nota2=rand(0,5);
	$nota3=rand(0,5);
	$nota4=rand(0,5);

	echo "Esta es la nota del estudiante:  $est<br>";
	echo "la primer nota es $nota1<br>";
	echo "La segunda nota es $nota2<br>";
	echo "La tercer nota es $nota3<br>";
	echo "La cuarta nota es $nota4<br>";

	$prom = ($nota1+$nota2+$nota3+$nota4)/4;
	if ($prom == 3.5){

		echo "usted a ganado $prom<br>";
	}
	elseif ($prom<3.5) {
		echo "usted perdio $prom<br>";
	
	}
	elseif ($prom == 5) {
		echo "No perdio ni Gano $prom<br>";
	}
	$est++;
}


 ?>