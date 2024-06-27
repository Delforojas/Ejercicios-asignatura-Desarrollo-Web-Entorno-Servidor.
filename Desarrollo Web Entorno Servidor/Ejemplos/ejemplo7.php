<?php 

    session_start();
	
	if(!isset($_SESSION["Usuario"])) { //Comprueba si la variable está definida y le asigna un valor
	      $_SESSION ['Usuario'] = "Onliner";
	   }else{
	      $_SESSION['Usuario']= null;
	   }
	   
	switch ($_SESSION['Usuario']) { //Dependiendo del valor de la variable , muestra un mensaje diferente
	    case 'Onliner';
		    echo "El valor de la variable de sesión es Onliner.";
			break;
			
		default:
		    echo "La variable de sesión no está definida";
			break;
	}
	
?>