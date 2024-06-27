<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Ejemplo Acceso a Base de Datos</title>
</head>
<body>

     <h1>Conectando a la base de datos de todos los paises</h1>

     <?php
          
          include'ejemplo14_CityController.php';
    ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Código Pais</th>
            <th>Comunidad</th>
            <th>Poblacion</th>
        </tr>
    <?php CityController::showListaCiudades(); ?>
    </table>
</body>
</html>