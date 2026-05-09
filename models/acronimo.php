<?php

class AcronimoModel {

    public function generarAcronimo($texto) {
        $palabras = explode(" ", $texto);
        $acronimo = "";

        foreach ($palabras as $palabra) {
            if (strlen($palabra) > 0) {
                $acronimo .= strtoupper($palabra[0]);
            }
        }

        return $acronimo;
    }
}