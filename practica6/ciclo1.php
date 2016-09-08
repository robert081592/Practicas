

<?php 

$i=1; $num2y3=0; $num3=0; $num2=0;
while ($i <=10) {
	if (($i % 2==0) AND ($i % 3==0)) {
		echo "$i si es multiplo de 2 y de 3.<br>";
		$num2y3+=1;
	}
	elseif ($i % 2==0) {
		echo "$i es multiplo de 2.<br>";	
		$num2+=1;

	}
	elseif ($i % 3==0) {
		echo "$i es multiplo de 3.<br>";
		$num3+=1;

	}else
	{
			echo "$i no es multiplo ni de 2 o de 3.<br>";
		}
	
	$i+=1;
}
echo "______________________________.<br>";
echo "$num2y3 son multiplos de 2 y 3.<br>";
echo "$num3 son multiplos de 3.<br>";
echo "$num2 son multiplos de 2.<br>";
echo "Los restantes ". (10-$num2y3-$num2-$num3)."numeros no son multiplos de 2 ni de 3";
/*$i=0;
while ($i<=10) {
	print $i;
	$i=$i+1;
}
/*}
do {
	$i=1;
	print "esto es: $i";
} while ($i>0);*///la funcion se hace al final


?>