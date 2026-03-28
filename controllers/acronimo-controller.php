<?php
require_once("../models/acronimo.php");

if ($_POST) {
    $frase = $_POST['frase'];
    $resultado = Acronimo::generar($frase);
}