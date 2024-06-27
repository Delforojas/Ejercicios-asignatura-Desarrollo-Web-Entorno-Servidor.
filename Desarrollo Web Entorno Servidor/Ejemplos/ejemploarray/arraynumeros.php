<!DOCTYPE htm>
<html>
      <head>
	       <title> Operaciones arrrays </title>
	  </head>
	  <body>
	       <?php
		       include("funcionesarray.php");
			   $numeros = [53,66,71,46,22,85,19,67,77,41,60,];
			   $mayor = max($numeros);
               $menor = min($numeros);
               $suma = array_sum($numeros);
			   $pares = [];
			   

			   
			   echo "Dado el siguiente Array ".$numeros;
			   echo "El mayor valor del array es: " . $mayor;
			   echo "El menor valor del array es: " . $menor;
			   echo "La suma de todos los valores del array es: " . $suma;
			   echo "Los números pares son: " . implode(", ", $pares);
			   echo "El mayor valor del array es $mayor y está en la posición $posicion";
			   echo "El menor valor del array es $menor y está en la posición $posicion";
			   
			?>
		</body>
		</html>
			   