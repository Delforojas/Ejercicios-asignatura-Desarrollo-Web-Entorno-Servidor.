<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
	<title>Ejemplo Acceso a Base de Datos</title>
    </head>

    <body>

        <h1> Conectando a la base de datos de paises</h1>

        <?php
            
            include 'ejemplo13_controlador.php'
        ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código pais</th>
                <th>Comunidad</th>
                <th>Poblacion</th>
            </tr>
        <?php showListaCiudades(); ?>
        </table>
        </body>
        </html>