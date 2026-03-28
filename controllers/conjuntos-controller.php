<?php
require_once("../models/conjuntos.php");

$resultado = "";

if ($_POST) {
    $a = array_map('intval', explode(",", $_POST['a']));
    $b = array_map('intval', explode(",", $_POST['b']));

    $union = implode(",", Conjuntos::union($a,$b));
    $inter = implode(",", Conjuntos::interseccion($a,$b));
    $difAB = implode(",", Conjuntos::diferencia($a,$b));
    $difBA = implode(",", Conjuntos::diferencia($b,$a));

    $resultado = "Unión: $union <br> Intersección: $inter <br> A-B: $difAB <br> B-A: $difBA";
}

include("../views/conjuntos_view.php");