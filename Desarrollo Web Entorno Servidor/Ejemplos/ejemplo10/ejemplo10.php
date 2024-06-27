<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
	 <title>Ejemplo 10:Modelo Vista Controlador</title>
</head>

<body>
    <h1>Lista de la compra</h1>
	<ol>
	    <?php
		//Incorporamos las otras partes del proyecto
		include("ejemplo10Modelo.php");
		include("ejemplo10Controlador.php");
		//llamamos a la funcion y pedimos los datos
		enumerarElementos($compra);
		?>
		
	</ol>
</body>
</html>