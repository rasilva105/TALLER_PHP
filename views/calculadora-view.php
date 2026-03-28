<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>

<h2>Calculadora</h2>

<form method="post" action="../controllers/calculadora_controller.php">

    <input type="number" step="any" name="a" placeholder="Número 1" required>
    <input type="number" step="any" name="b" placeholder="Número 2" required>

    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>

    <button type="submit" name="calcular">Calcular</button>
    <button type="submit" name="borrar">Borrar Historial</button>

</form>

<p>Resultado: 
<?php 
    if (isset($resultado)) {
        echo $resultado;
    }
?>
</p>

<h3>Historial</h3>
<pre>
<?php 
    if (isset($historial) && $historial != "") {
        echo $historial;
    } else {
        echo "No hay historial";
    }
?>
</pre>

<a href="../index.php">Volver</a>

</body>
</html>