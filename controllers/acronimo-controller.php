<?php

require_once __DIR__ . '/../models/acronimo.php';

$model = new AcronimoModel();

$resultado = "";

if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];
    $resultado = $model->generarAcronimo($texto);
}

require_once __DIR__ . '/../views/acronimo-view.php';