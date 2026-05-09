<?php

require_once("../models/Estadistica.php");

$promedio="";
$media="";
$moda="";

if($_POST){

    $modelo = new Estadistica();

    $numeros = explode(",", $_POST['numeros']);

    $promedio = $modelo->promedio($numeros);

    $media = $modelo->media($numeros);

    $moda = $modelo->moda($numeros);
}

require_once("../views/estadistica.php");