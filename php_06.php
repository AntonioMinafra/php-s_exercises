<?php

/*
Crea una classe Rettangolo con due attributi
Base (b);
Altezza (h);
Importare nella classe il trait
Dentro la classe Rettangolo crea tre metodi che vanno a calcolare:
Area → b * h;
Perimetro → 2 * b + 2 * h;
Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)
TIP: vedere il metodo di php sqrt()
I metodi della classe rettangolo devono sfruttare al loro interno le operazioni fornite dal trait Calculator

*/
trait Calculator
{
    static function sum($a, $b) {
        return $a + $b;
    }
    public function sub($a, $b) {
        return $a - $b;
    }
    static function mul($a, $b) {
        return $a * $b;
    }
    public function div($a, $b) {
        return $a / $b;
    }
    public function sqr($a){
        return sqrt($a);
    }
}

class Rettangolo
{
    use Calculator;

    public $b, $h;

    public function __construct($base, $altezza){
        $this->b = $base;
        $this->h = $altezza;
    }

    public function area(){
        $result = $this->mul($this->b,$this->h);
        echo $result . "\n";
    }

    public function perimetro(){
        $result = $this->mul(2,$this->b) + $this->mul(2,$this->h);
        echo $result . "\n";
    }

    public function diagonale(){
        $somma = $this->mul($this->b,$this->b) + $this->mul($this->h,$this->h);
        $result = $this->sqr($somma);
        echo $result . "\n";

    }
}
$rettangolo = new Rettangolo(4,6);
$rettangolo->area();
$rettangolo->perimetro();
$rettangolo->diagonale();