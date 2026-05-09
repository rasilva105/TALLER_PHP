<?php

require_once("../models/Acronimo.php");

class AcronimoController {

    public function procesar(){

        $resultado="";

        if($_POST){

            $modelo = new Acronimo();

            $resultado = $modelo->generar($_POST['texto']);
        }

        require_once("../views/acronimo.php");
    }
}