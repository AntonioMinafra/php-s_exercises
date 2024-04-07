<?php
/* Replicare l'esercizio del panino visto a lezione (se siete stanch* dei panini potete comporre quello che preferite, dalle torte, ai burrito a quello che volete, è solo un pretesto per mettere tutto in pratica) */


abstract class Bread
{
    abstract public function flourType();
}

class Segale extends Bread
{
    public function flourType(){
        echo "-Farina: Segale\n";
    }
}
class Manitoba extends Bread
{
    public function flourType(){
        echo "-Farina: Manitoba\n";
    }
}

abstract class Protein
{
    abstract public function proteinType();
}

class Prosciutto extends Protein
{
    public function proteinType(){
        echo "-Proteina: Prosciutto\n";
    }
}
class Mortadella extends Protein
{
    public function proteinType(){
        echo "-Proteina: Mortadella\n";
    }
}

abstract class Dressing
{
    abstract public function dressingType();
}

class Stracciatella extends Dressing
{
    public function dressingType(){
        echo "-Salsa: Stracciatella\n";
    }
}

class PestoAlPistacchio extends Dressing
{
    public function dressingType(){
        echo "-Salsa: PestoAlPistacchio\n";
    }
}

class Panino
{
    public $bread, $protein, $dressing;

    public function __construct( Bread $pane, Protein $proteina, Dressing $salsa){
        $this->bread = $pane;
        $this->protein = $proteina;
        $this->dressing = $salsa;
    }

    public function getOrder(){
        echo "Ordine: \n";
        $this->bread->flourType();
        $this->protein->proteinType();
        $this->dressing->dressingType();
    }
}

$sandwick= new panino(new Segale(), new Prosciutto(), new Stracciatella());
$sandwick->getOrder();
