<?php 

	$cantidad = $_POST['cantidad'];
	$moneda = $_POST['moneda'];
	$precio = 28.70;
	$conversion;

	if ($moneda == 1) 
		{
			$conversion = $cantidad / $precio;
			echo "Monto en córdobas: ", $cantidad;
			echo "Monto en Dólares: ", $conversion;
		}

	else
	{
		if ($moneda == 2)
		{
			$conversion = $cantidad * $precio;
			echo "Monto en Dólares: ", $cantidad;
			echo "Monto en córdobas: ", $conversion;
			
		}
	}	
?>