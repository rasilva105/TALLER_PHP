<?php

require_once __DIR__ . "/../models/Calculadora.php";

$resultado="";

if($_POST){

    $modelo = new Calculadora();

    $n1=$_POST['n1'];

    $n2=$_POST['n2'];

    $op=$_POST['operacion'];

    $resultado=$modelo->calcular($n1,$n2,$op);

    $historial=[];

    if(file_exists("../data/historial.json")){

        $historial=json_decode(file_get_contents("../data/historial.json"),true);
    }

    $historial[]="$n1 $op $n2 = $resultado";

    file_put_contents("../data/historial.json",json_encode($historial));
}

$historial=[];

if(file_exists("../data/historial.json")){

    $historial=json_decode(file_get_contents("../data/historial.json"),true);
}

require_once __DIR__ . "/../views/calculadora.php";