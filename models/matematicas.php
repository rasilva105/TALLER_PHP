<?php
class Matematicas {

    public static function fibonacci($n) {
        $serie = [0,1];
        for ($i=2; $i<$n; $i++) {
            $serie[] = $serie[$i-1] + $serie[$i-2];
        }
        return $serie;
    }

    public static function factorial($n) {
        $fact = 1;
        for ($i=1; $i<=$n; $i++) {
            $fact *= $i;
        }
        return $fact;
    }
}