<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h2>Promedio, Media y Moda</h2>

<form method="POST">

<input type="text" name="numeros" placeholder="1,2,3,4" required>

<button>Calcular</button>

</form>

<h3>Promedio: <?= $promedio ?></h3>

<h3>Media: <?= $media ?></h3>

<h3>Moda: <?= $moda ?></h3>

<a href="../index.php">Volver</a>

</body>
</html>