<!DOCTYPE html>
<html>
<head>
    <title>Binario</title>
</head>
<body>

<h2>Conversión a Binario</h2>

<form method="post" action="../controllers/binario_controller.php">
    <input type="number" name="numero">
    <button type="submit">Convertir</button>
</form>

<p>Resultado: <?php echo $resultado; ?></p>

<a href="../index.php">Volver</a>

</body>
</html>