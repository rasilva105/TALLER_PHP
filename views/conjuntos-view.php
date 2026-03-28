<!DOCTYPE html>
<html>
<head>
    <title>Conjuntos</title>
</head>
<body>

<h2>Conjuntos</h2>

<form method="post" action="../controllers/conjuntos_controller.php">
    <input type="text" name="a" placeholder="Conjunto A (1,2,3)">
    <input type="text" name="b" placeholder="Conjunto B (3,4,5)">
    <button type="submit">Calcular</button>
</form>

<p><?php echo $resultado; ?></p>

<a href="../index.php">Volver</a>

</body>
</html>