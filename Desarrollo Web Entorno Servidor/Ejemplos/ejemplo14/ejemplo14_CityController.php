<?php

include "ejemplo14_city.php";

class CityController {
    public static function showListaCiudades(){
        $city = new City();
        $datos =$city->getListaCiudades();
        if (is_string($datos)){
            echo $datos;
        }else {
            $plantilla =file_get_contents('14_list_template.php');
            while($fila = $datos->fetch_assoc()) {
                echo str_replace(
                    ['{ID}','{Name}','{CountryCode}','{District}','{Population}'],
                    [$fila["ID"],$fila["Name"],$fila["CountryCode"],$fila["District"],$fila["Population"]],
                    $plantilla
                );
            };
        }
    }
}