<?php

require_once __DIR__ . "/../models/Binario.php";

$resultado="";

if($_POST){

    $modelo = new Binario();

    $resultado = $modelo->convertir($_POST['numero']);
}

require_once __DIR__ . "/../views/binario.php";