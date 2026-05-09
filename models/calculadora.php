<?php

class Calculadora{

    public function calcular($n1,$n2,$op){

        switch($op){

            case '+':
                return $n1+$n2;

            case '-':
                return $n1-$n2;

            case '*':
                return $n1*$n2;

            case '/':
                return $n2!=0 ? $n1/$n2 : "Error";

            case '%':
                return ($n1*$n2)/100;
        }
    }
}