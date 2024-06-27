<?php 
     
include "ejemplo13_modelo.php";

function showListaCiudades(){
    $datos = getListaCiudades(); // Utiliza el nombre correcto de la función aquí
    //Si hemos recibido un mensaje de error lo mostramos.
    if(is_string($datos)){
        echo $datos;
    }else{//Si hemos recibido datos 
    //Obtenemos cada una de las filas de datos que nos devolvió la consulta.
    //mysqli_fetcj_assoc avanza entre cada uno de los elementos del array
    //que contiene cada vez que se llama, hasta que no haya más por eso se puede usar en un while.
        while($fila =mysqli_fetch_assoc($datos)){
            echo "<tr>\n
                      <td>" . $fila ["ID"] . "</td>\n
                      <td>" . $fila ["Name"] . "</td>\n
                      <td>" . $fila ["CountryCode"] . "</td>\n
                      <td>" . $fila ["District"] . "</td>\n
                      <td>" . $fila ["Population"] . "</td>\n
                </tr>";
        };
    };
}
?>
