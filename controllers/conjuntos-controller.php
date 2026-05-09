<?php

require_once __DIR__ . "/../models/Conjunto.php";

$union=[];
$interseccion=[];
$diferenciaAB=[];
$diferenciaBA=[];

if($_POST){

    $modelo = new Conjunto();

    $a = explode(",", $_POST['a']);

    $b = explode(",", $_POST['b']);

    $union = $modelo->union($a,$b);

    $interseccion = $modelo->interseccion($a,$b);

    $diferenciaAB = $modelo->diferenciaAB($a,$b);

    $diferenciaBA = $modelo->diferenciaBA($a,$b);
}

require_once __DIR__ . "/../views/conjuntos.php";