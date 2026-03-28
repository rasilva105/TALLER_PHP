<?php

$resultado = "";

if ($_POST) {
    $pre = $_POST['preorden'];
    $in = $_POST['inorden'];

    $resultado = "Preorden: $pre <br> Inorden: $in <br> (Construcción básica)";
}

include("../views/arbol_view.php");