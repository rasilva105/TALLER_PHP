<?php

require_once("../models/Fibonacci.php");

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

require_once("../views/fibonacci.php");