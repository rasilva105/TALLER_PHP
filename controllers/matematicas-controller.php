<?php
require_once("../models/matematicas.php");

$resultado = "";

if ($_POST) {
    $n = $_POST['numero'];
    $op = $_POST['operacion'];

    if ($op == "fibonacci") {
        $resultado = implode(", ", Matematicas::fibonacci($n));
    } else {
        $resultado = Matematicas::factorial($n);
    }
}

include("../views/matematicas_view.php");