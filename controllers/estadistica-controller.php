<?php

require_once __DIR__ . "/../models/Estadistica.php";

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

require_once __DIR__ . "/../views/estadistica-view.php";