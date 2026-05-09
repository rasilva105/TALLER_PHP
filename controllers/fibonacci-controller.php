<?php

require_once __DIR__ . "/../models/fibonacci.php";

$resultado=[];

if($_POST){

    $modelo = new Fibonacci();

    $numero = $_POST['numero'];

    $tipo = $_POST['tipo'];

    if($tipo=="fibonacci"){

        $resultado = $modelo->fibonacci($numero);

    }else{

        $resultado = $modelo->factorial($numero);
    }
}

require_once __DIR__ . "/../views/fibonacci.php";