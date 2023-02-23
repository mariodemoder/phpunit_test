<?php

namespace App;

class Suma{

    private $suma;

    public function sumar($p1, $p2){
        $this->suma = $p1 + $p2;
    }

    public function resultado(){
        return $this->suma;
    }
}