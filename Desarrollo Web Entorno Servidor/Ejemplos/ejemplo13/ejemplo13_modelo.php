<?php
require_once("ejemplo13_modelo_datos.php");

function crearConexion() {
    //Datos de conexión
    /*
    $database="world";
    $host="localhost";
    $user ="fernando";
    $password="ilerna";
    */

    //Establecemos la conexión con la base de datos 
    $conexion = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

    //Si hay un error en la conexión, lo mostramos y detenemos la ejecución.
    if (!$conexion)
        die("<br>Error de conexión con la base de datos: " . mysqli_connect_error());

    //Si todo está correcto, enviamos la conexión a la base de datos.
    return $conexion;
}

function cerrarConexion($conexion) {
    mysqli_close($conexion);
}

function getListaCiudades() {
    //Nos conectamos a la base de datos world
    $DB = crearConexion();

    //Definimos la consulta para obtener todos los datos de la tabla city.
    $sql = "SELECT ID, Name, CountryCode, District, Population FROM city ORDER BY Population ASC"; //ORDER BY Population DESC
    $result = mysqli_query($DB, $sql);

    //Si la consulta ha devuelto algún valor, devolvemos los valores.
    if (mysqli_num_rows($result) > 0) {
        //Cerramos conexión
        cerrarConexion($DB);
        return $result;
    } else {
        //Si no, enviamos un mensaje de error.
        cerrarConexion($DB);
        echo "No hay nada en la lista de ciudades.";
    }
}

//Aquí podrías llamar a la función getListaCiudades() si necesitas usarla.
?>
