<?php
class Acronimo {
    public function generar($texto){
        $texto = str_replace("-", " ", $texto);
        $texto = preg_replace("/[^a-zA-Z ]/", "", $texto);
        $palabras = explode(" ", $texto);
        $resultado = "";
        foreach($palabras as $palabra){

            if(!empty($palabra)){
                $resultado .= strtoupper($palabra[0]);
            }
        }
        return $resultado;
    }
}