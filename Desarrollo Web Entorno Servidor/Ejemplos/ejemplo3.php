<!DOCTYPE html>
<html>
     <head>
	     <title> Ejemplo2 </title>
		 <style type="text/css">
		      img{
			        width:300px;
					height:200px;
				}
         </style>					 
	 </head>
	 
	<body>
     <!--Insertar código PHP dentro de HTML-->
	 <?php 
	     #Podemos definir código PHP en cualquier punto del fichero
		 $direccion = "ejemplo2";
		 $extension =".php";
		 $imagen ="logo.png";
		?>
     <!--Seguir programando en HTML e insertar dentro del fragmento código PHP 
	     para commpletar algún valor-->
	 <a href="<?php echo $direccion . $extension?>">
	     Este enlace coge la dirección definida de las variables en PHP
		</a><br>
     <img src="<?php echo $imagen?>">
	 </body>
</html>