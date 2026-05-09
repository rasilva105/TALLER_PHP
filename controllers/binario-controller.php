<?php

require_once("../models/Binario.php");

$resultado="";

if($_POST){

    $modelo = new Binario();

    $resultado = $modelo->convertir($_POST['numero']);
}

require_once("../views/binario.php");