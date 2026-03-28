<?php
class Estadistica {

    public static function promedio($arr) {
        return array_sum($arr)/count($arr);
    }

    public static function mediana($arr) {
        sort($arr);
        $n = count($arr);
        return $arr[intval($n/2)];
    }

    public static function moda($arr) {
        $conteo = array_count_values($arr);
        return array_search(max($conteo), $conteo);
    }
}