<!DOCTYPE html>

<head>
    <title>Fecha de Cumpleaños en Tiempo UNIX</title>
</head>

<body>
    <h2>Fecha de Cumpleaños en Tiempo UNIX</h2>
    <form action="ejercicio4_receptor_formulariocumple.php" method="post">
        Día:
        <input type="number" id="dia" name="dia" min="1" max="31">
        <br>
        Mes:
        <select id="mes" name="mes">
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        <br>
        Año:
        <input type="number" id="ano" name="ano">
        <br>
        Hora:
        <input type="number" id="hora" name="hora" min="0" max="23">
        <br>
        Minutos:
        <input type="number" id="minutos" name="minutos" min="0" max="59">
        <br>
        Segundos:
        <input type="number" id="segundos" name="segundos" min="0" max="59">
        <br>
        <button type="submit">Convertir</button>
    </form>
</body>

</html>