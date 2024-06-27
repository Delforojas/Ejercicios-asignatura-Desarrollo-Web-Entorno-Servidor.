<!DOCTYPE html>
<html>
     <head>
	      <title>Ejemplo6: Session</title>
     </head>
	  
	 <body>
	      <?php 
		      session_start();
			  if(!isset($_SESSION['tActual'])) {
			      $_SESSION['tActual'] = time();
				  echo "Se inicia la sesion a las " .date("H:i:s",$_SESSION['tActual']);
			  }
			  else{
			      echo"Se cierra la sesión que se inicio a las " .date("H:i:s" ,$_SESSION['tActual']);
				  session_destroy();
		      }
		   ?>
		   
	</body>
</html>
