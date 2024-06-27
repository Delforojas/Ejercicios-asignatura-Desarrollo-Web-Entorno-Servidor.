<?php
    if (!isset($_COOKIE['repeticiones'])) {
	    //Creo una cookie por 5segundos
		setcookie("repeticiones",10, time() +5);
		echo "Creo la cookie";
	}else {
	   //Al volver a cargar la página comprueblo la cookie y hago cosas.
	   echo "ya está definida la cookie<br>";
	   $veces = $_COOKIE['repeticiones'];
	   for($i=0; $i <$veces; $i++) {
	       echo"Esta es la repeticion número:" .($i +1)."<br>";
	   }
	}
?>