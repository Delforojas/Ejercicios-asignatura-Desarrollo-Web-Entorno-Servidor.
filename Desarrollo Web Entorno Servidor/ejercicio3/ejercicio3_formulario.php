<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>

<body>
    <h2>Realizar Pedido</h2>
    <form action="ejercicio3_formularioPedido.php" method="post">
        <label for="primer_plato">Primer Plato:</label>
        <select name="primer_plato" id="primer_plato">
            <option value="pasta">Pasta</option>
            <option value="ensalada">Ensalada</option>
            <option value="sopa">Sopa</option>
            <option value="entremeses">Entremeses</option>
        </select><br><br>

        <label for="segundo_plato">Segundo Plato:</label>
        <select name="segundo_plato" id="segundo_plato">
            <option value="carne">Carne</option>
            <option value="pollo">Pollo</option>
            <option value="pescado">Pescado</option>
            <option value="verduras">Verduras</option>
        </select><br><br>

        <label for="bebida">Bebida:</label>
        <select name="bebida" id="bebida">
            <option value="agua">Agua</option>
            <option value="refresco">Refresco</option>
            <option value="cerveza">Cerveza</option>
            <option value="vino">Vino</option>
        </select><br><br>

        <label for="postre">Postre:</label>
        <select name="postre" id="postre">
            <option value="helado">Helado</option>
            <option value="fruta">Fruta</option>
            <option value="pastel">Pastel</option>
            <option value="yogur">Yogur</option>
        </select><br><br>

        <input type="submit" value="Realizar Pedido">
    </form>
</body>

</html>