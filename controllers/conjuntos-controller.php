<?php

require_once("../models/Conjunto.php");

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

require_once("../views/conjuntos.php");