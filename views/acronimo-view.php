<!DOCTYPE html>
<html>
<head>
    <title>Acrónimo</title>
</head>
<body>

<h1>Generador de Acrónimos</h1>

<form method="POST" action="">
    <input type="text" name="texto" placeholder="Escribe una frase">
    <button type="submit">Generar</button>
</form>

<?php if (!empty($resultado)): ?>
    <h2>Resultado: <?php echo $resultado; ?></h2>
<?php endif; ?>

</body>
</html>