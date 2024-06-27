<!DOCTYPE html>
<html>
     <head>
	     <title>Ejemplo 5:Fechas</title>
     </head>
	 <body>
	 <?php
	     $t=time();
		 echo '<h1> Mostramos la fecha de diferentes maneras :</h1>';
		 echo 'Utilizando date("Y-m-d" ,$t); <b>' .date("Y-m-d" ,$t)."</b><br>";
		 echo 'Utilizando date("l jS \of F Y H:i:s A"): <b>'.date("l jS \of F Y H:i:s A") . "</b><br>";
		 $fecha = getdate(date("U"));
		 echo 'Utilizando getdate(date("U")):muestra: <b>'.
		 "$fecha[weekday], $fecha[month] $fecha[mday], $fecha[year] -
		 $fecha[hours]:$fecha[minutes]:~fecha[seconds].</b><br>";
		 
		 #Para mostrar la fecha en español
		 setlocale(LC_TIME, 'es_ES.UTF-8','esp' );
		 $formatoFechaHora= "%j: %A, %d de %B de %Y %H:%M:%S";
		 $strf =strftime($formatoFechaHora);
		 echo ('Utilizando strftime(%j: %A, %d de %B de %Y %H:%M:%S), muestra: <b>' . "$strf</b>");
		 
    ?>
	</body>
</html>