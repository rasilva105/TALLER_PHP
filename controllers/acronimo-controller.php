<?php

require_once __DIR__ . "/../models/Acronimo.php";

class AcronimoController {

    public function procesar(){

        $resultado="";

        if($_POST){

            $modelo = new Acronimo();

            $resultado = $modelo->generar($_POST['texto']);
        }

        require_once __DIR__ . "/../views/acronimo.php";
    }
}