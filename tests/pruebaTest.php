<?php 
use PHPUnit\Framework\TestCase;
use App\Suma;

class PruebaTest extends TestCase
{
/** @test */
    Public function ComprobarUnoesUno_Bien(){
        //setup
        $suma = new Suma;
        //accion
        $suma->sumar(1, 1);
        //comprobaciones o aserciones
        $this->assertEquals(2,$suma->resultado());

    }
}
