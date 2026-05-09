<?php

class Estadistica{

    public function promedio($numeros){

        return array_sum($numeros)/count($numeros);
    }

    public function media($numeros){

        sort($numeros);

        $cantidad=count($numeros);

        $mitad=floor($cantidad/2);

        if($cantidad%2==0){

            return ($numeros[$mitad-1]+$numeros[$mitad])/2;
        }

        return $numeros[$mitad];
    }

    public function moda($numeros){

        $conteo=array_count_values($numeros);

        arsort($conteo);

        return array_key_first($conteo);
    }
}