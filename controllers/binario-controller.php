<?php
require_once("../models/binario.php");

$resultado = "";

if ($_POST) {
    $num = $_POST['numero'];
    $resultado = Binario::convertir($num);
}

include("../views/binario_view.php");