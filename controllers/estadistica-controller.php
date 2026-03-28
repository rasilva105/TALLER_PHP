<?php
require_once("../models/estadistica.php");

$resultado = "";

if ($_POST) {
    $datos = explode(",", $_POST['numeros']);
    $datos = array_map('floatval', $datos);

    $prom = Estadistica::promedio($datos);
    $med = Estadistica::mediana($datos);
    $mod = Estadistica::moda($datos);

    $resultado = "Promedio: $prom | Mediana: $med | Moda: $mod";
}

include("../views/estadistica_view.php");