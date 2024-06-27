<!DOCTYPE html>
<html>
     <head>
	     <title>Ejemplo 4 Formulario</title>
     </head>
	 
	 <body>
	     <form name="formulario" action ="ejemplo4_receptor.php" method="POST">
		  <h1>FORMULARIO WEB </h1>
		  <label>Usuario: </label><input type="text" name="nombre" value ="" />
		  <label>Contraseña: </label><input type="password" name="contrasena" value="" />
		  <input type="submit" name="enviar" value="Enviar"/>
		  <input type="reset" name="cancelar" value="Cancelar"/>
		</form>
	</body>
</html>	