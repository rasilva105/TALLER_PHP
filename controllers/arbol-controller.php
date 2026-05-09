<?php
require_once __DIR__ . "/../models/arbol.php";
$resultado = "";

if ($_POST) {
    $pre = $_POST['preorden'];
    $in = $_POST['inorden'];

    $resultado = "Preorden: $pre <br> Inorden: $in <br> (Construcción básica)";
}

include(__DIR__ . "/../views/arbol_view.php");