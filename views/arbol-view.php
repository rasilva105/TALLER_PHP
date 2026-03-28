<!DOCTYPE html>
<html>
<head>
    <title>Árbol Binario</title>
</head>
<body>

<h2>Árbol Binario</h2>

<form method="post" action="../controllers/arbol_controller.php">
    <input type="text" name="preorden" placeholder="Preorden">
    <input type="text" name="inorden" placeholder="Inorden">
    <button type="submit">Construir</button>
</form>

<p><?php echo $resultado; ?></p>

<a href="../index.php">Volver</a>

</body>
</html>