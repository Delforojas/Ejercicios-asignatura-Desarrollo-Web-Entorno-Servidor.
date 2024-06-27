<?php
// Verificar si las claves existen en $_POST antes de usarlas
$dia = isset($_POST['dia']) ? $_POST['dia'] : null;
$mes = isset($_POST['mes']) ? $_POST['mes'] : null;
$ano = isset($_POST['ano']) ? $_POST['ano'] : null;
$hora = isset($_POST['hora']) ? $_POST['hora'] : null;
$minutos = isset($_POST['minutos']) ? $_POST['minutos'] : null;
$segundos = isset($_POST['segundos']) ? $_POST['segundos'] : null;

// Verificar si todos los valores necesarios están presentes
if ($dia && $mes && $ano && $hora && $minutos && $segundos) {
    // Convertir la fecha a tiempo UNIX
    $fechaUnix = strtotime("$dia-$mes-$ano $hora:$minutos:$segundos");
    setlocale(LC_TIME, 'es_ES.UTF-8', 'esp');
    // Formatear la fecha
    $formatoFechaHora = "%A, %e de %B de %Y a las %H:%M:%S";
    $strf = strftime($formatoFechaHora, $fechaUnix);
    // Mostrar el resultado
    echo "El $strf tiene el valor UNIX de $fechaUnix";
} else {
    echo "Faltan datos para completar la fecha.";
}