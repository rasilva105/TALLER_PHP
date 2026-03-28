<?php
require_once("../models/calculadora.php");

$resultado = "";
$historial = Calculadora::obtenerHistorial();

if (isset($_POST['calcular'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $op = $_POST['op'];

    $resultado = Calculadora::operar($a, $b, $op);

    Calculadora::guardarHistorial("$a $op $b = $resultado");

    $historial = Calculadora::obtenerHistorial();
}

if (isset($_POST['borrar'])) {
    Calculadora::borrarHistorial();
    $historial = "";
}

include("../views/calculadora_view.php");