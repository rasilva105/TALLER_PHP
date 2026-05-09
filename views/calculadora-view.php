<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h2>Calculadora</h2>

<form method="POST">

<input type="number" step="any" name="n1">

<input type="number" step="any" name="n2">

<select name="operacion">

<option value="+">Suma</option>

<option value="-">Resta</option>

<option value="*">Multiplicación</option>

<option value="/">División</option>

<option value="%">Porcentaje</option>

</select>

<button>Calcular</button>

</form>

<h3>
Resultado:

<?php
if(isset($resultado)){
    echo $resultado;
}
?>

</h3>

<h2>Historial</h2>

<?php

if(isset($historial) && is_array($historial)){

    foreach($historial as $h){

        echo "<p>$h</p>";
    }
}
?>

<a href="../index.php">Volver</a>

</body>
</html>