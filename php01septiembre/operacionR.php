<?php 
$a = $_REQUEST['valor1'];
$b = $_REQUEST['valor2'];
$c = $_REQUEST['valor3'];
$d=7;
$e=2;

if ($_REQUEST['operacion']=="area"){
	$r_area= area ($a,$b,$c); 
	echo "El area es: $r_area";
}
	else
		if ($_REQUEST['operacion']== "expresion") {
			$r_expresion= expresion ($a,$b,$c);
			echo "La expresion es: $r_expresion";
			
		}


function area ($a,$b,$c){
$area=$a*$b/$c;
return $area;

}

function expresion ($a,$b,$c,$d,$e){
$expresion=($a+$d*$c)/($b+$e-$a)+$e*$b;
return $expresion;
}
 ?>