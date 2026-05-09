<?php

class Conjunto{

    public function union($a,$b){

        return array_unique(array_merge($a,$b));
    }

    public function interseccion($a,$b){

        return array_intersect($a,$b);
    }

    public function diferenciaAB($a,$b){

        return array_diff($a,$b);
    }

    public function diferenciaBA($a,$b){

        return array_diff($b,$a);
    }
}