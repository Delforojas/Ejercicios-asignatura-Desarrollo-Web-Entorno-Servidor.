<!DOCTYPE html>
<html>
     <head>
	     <title>Operaciones aritmeticas</title>
     </head>
	 <body>
	     <?php
		     include("delfin_funciones.php");
			 $op1 = 7;
			 $op2 = 4;
			 echo "Operaciones con los números ".$op1." y ".$op2.":<br>";
			 echo "Sumar: ".suma($op1,$op2)."<br>";	
			 echo "Restar: ".resta($op1,$op2)."<br>";
			 echo "Multiplicar: ".multiplicacion($op1,$op2)."<br>";
			 echo "Dividir: ".division($op1,$op2)."<br>";
		?>
	</bbody>
</html>	