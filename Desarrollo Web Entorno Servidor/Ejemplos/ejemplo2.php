<!DOCTYPE html>
<!--Ejemplo 2: Variables y tipos de datos-->

<html>
     <head>
	     <title> Ejemplo 2: Variables y tipos de datos </title>
		 
	 </head>
	 
	<body>
<?php 
  $texto ="caracteres";
  $entero=5;
  $decimal=9.9;
  define("Pi",3.1416);
  echo "Esto es una cadena de" .$texto. "</br>";
  echo "EL" .$entero. "es un numero entero y podemos hacer cosas con él
  como por ejemplo esto:".(2*Pi*$entero)."</br>";
  echo"Y este!" .$decimal."es un numero en coma flotante y también permite 
  operaciones como" .round($decimal) ."</br>";
  
  ?>
  
 </body>
 </html>