<?php
/* Ultimare l'esercizio dell'Esercito che abbiamo iniziato a lezione (può essere un esercito fantasy o di supereroi o di personaggi di videogiochi, anche qui potete sbizzarrirvi) */

//difesa
abstract class Defense
{
    abstract public function defenceStyle();
}

class Tower extends Defense
{
    public function defenceStyle(){
        echo "Arcieri tirareee!\n";
    }
}
class Spadaccino extends Defense
{
    public function defenceStyle(){
        echo "Difendere le muraaa!\n";
    }
}

//attacco

abstract class Attack
{
    abstract public function attackStyle();
}

class Cavaliere extends Attack
{
    public function attackStyle(){
        echo "Forza, Eorlingas! Caricaaaaa\n";
    }
}
class Aragorn extends Attack
{
    public function attackStyle(){
        echo "Per Frodoo!!";
    }
}

class Army
{
    public $defense , $attack;

    public function __construct( Defense $difesa, Attack $attacco){
        $this->defense = $difesa;
        $this->attack = $attacco;
    }

    public function getAbilities(){
        $this->defense->defenceStyle();
        $this->attack->attackStyle();
    }
}
$esercito = new army( new Tower(), new Cavaliere());
var_dump($esercito);
$esercito->getAbilities();