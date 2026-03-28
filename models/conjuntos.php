<?php
class Conjuntos {

    public static function union($a,$b){
        return array_unique(array_merge($a,$b));
    }

    public static function interseccion($a,$b){
        return array_intersect($a,$b);
    }

    public static function diferencia($a,$b){
        return array_diff($a,$b);
    }
}