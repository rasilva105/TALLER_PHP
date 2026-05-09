<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h2>Fibonacci / Factorial</h2>

<form method="POST">

<input type="number" name="numero" required>

<select name="tipo">

<option value="fibonacci">Fibonacci</option>

<option value="factorial">Factorial</option>

</select>

<button type="submit">Calcular</button>

</form>

<h3>

<?php

if(is_array($resultado) && !empty($resultado)){

    echo implode(", ", $resultado);
}

?>

</h3>

<a href="../index.php">Volver</a>

</body>
</html>