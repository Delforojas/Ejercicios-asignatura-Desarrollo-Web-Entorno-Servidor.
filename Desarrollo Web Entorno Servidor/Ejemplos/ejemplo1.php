<!DOCTYPE html>
<!--Ejemplo 1 : Como intefrar HTML y PHP en un mismo fichero -->
<html>
     <head>
	     <title> Ejemplo 1: HTML y PHP </title>
		 
	 </head>
	 
	<body>
	     <ul>
		    <!--Comentario en HTML -->
		<li> <?php echo "Punto Primero "?> </li>
		<li> <?php echo "Punto Segundo" ?> </li>
		
		 </ul>
		<?php 
            #Comentario en PHP
			echo "<ul>
			       <li>Punto tercero</li>
				   <li>Punto cuarto </li>
				 
				  </ul>";
		?>
	</body>
</html>