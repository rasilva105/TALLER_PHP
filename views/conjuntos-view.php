<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h2>Conjuntos</h2>

<form method="POST">

<input type="text" name="a" placeholder="1,2,3">

<input type="text" name="b" placeholder="3,4,5">

<button>Calcular</button>

</form>

<h3>
Unión:
<?php
if(isset($union) && is_array($union)){
    echo implode(", ", $union);
}
?>
</h3>

<h3>
Intersección:
<?php
if(isset($interseccion) && is_array($interseccion)){
    echo implode(", ", $interseccion);
}
?>
</h3>

<h3>
A-B:
<?php
if(isset($diferenciaAB) && is_array($diferenciaAB)){
    echo implode(", ", $diferenciaAB);
}
?>
</h3>

<h3>
B-A:
<?php
if(isset($diferenciaBA) && is_array($diferenciaBA)){
    echo implode(", ", $diferenciaBA);
}
?>
</h3>

<a href="../index.php">Volver</a>

</body>
</html>