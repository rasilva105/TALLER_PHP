<?php

class Calculadora {

    public static function operar($a, $b, $op){
        switch($op){
            case "+": return $a + $b;
            case "-": return $a - $b;
            case "*": return $a * $b;
            case "/": return ($b != 0) ? $a / $b : "Error (división por 0)";
            case "%": return ($a * $b) / 100;
            default: return "Operación inválida";
        }
    }

    public static function guardarHistorial($texto){
        $ruta = "../data/historial.txt";
        file_put_contents($ruta, $texto . PHP_EOL, FILE_APPEND);
    }

    public static function obtenerHistorial(){
        $ruta = "../data/historial.txt";

        if (!file_exists($ruta)) {
            file_put_contents($ruta, "");
        }

        return file_get_contents($ruta);
    }

    public static function borrarHistorial(){
        $ruta = "../data/historial.txt";
        file_put_contents($ruta, "");
    }
}