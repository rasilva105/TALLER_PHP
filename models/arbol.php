<?php
class Nodo {
    public $valor;
    public $izq;
    public $der;

    public function __construct($v){
        $this->valor = $v;
        $this->izq = null;
        $this->der = null;
    }
}