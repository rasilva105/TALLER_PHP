<!DOCTYPE html>
<html>
<head>
    <title>Estadística</title>
</head>
<body>

<h2>Estadística</h2>

<form method="post" action="../controllers/estadistica_controller.php">>
    <input type="text" name="numeros" placeholder="Ej: 1,2,3,4">
    <button type="submit">Calcular</button>
</form>

<p><?php echo $resultado; ?></p>

<a href="../index.php">Volver</a>

</body>
</html>