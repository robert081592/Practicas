<?php 
//Estructura estandar
for ($i=1; $i < 11 ; $i++) { 
	echo " $i";
}
//estructura por condicion
//declaracion de variables y contador
for ($i=1;; $i++) {
     if ($i>10) {
     	break;
     }
     echo " $i";
}

//3 estructura multiple
//declaracion de variable contadora fuera
//contador esta dentro de la estructura
// la condicion esta fuera de la estructura

$i=1;
for (;;){
	if ($i > 10){
		break;
	}
	echo "$i";
	$i++;
}
echo "<br>";
	

 ?>