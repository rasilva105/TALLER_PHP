<!DOCTYPE html>
<html>
<head>
    <title>Matemáticas</title>
</head>
<body>

<h2>Fibonacci / Factorial</h2>

<form method="post" action="../controllers/matematicas_controller.php">
    <input type="number" name="numero" placeholder="Número">
    
    <select name="operacion">
        <option value="fibonacci">Fibonacci</option>
        <option value="factorial">Factorial</option>
    </select>

    <button type="submit">Calcular</button>
</form>

<p>Resultado: <?php echo $resultado; ?></p>

<a href="../index.php">Volver</a>

</body>
</html>