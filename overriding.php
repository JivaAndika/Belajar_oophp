<?php

class Animal{
    public $name,
           $habitate,
           $color;

    public function __construct($name ="nama",$habitate = "habitat",$color ="warna"){
        $this->name = $name;
        $this->habitate = $habitate;
        $this->color = $color;
    }
    public function died ( Animal $animal){
        $animals = "{$animal->name} yang berwarna {$animal->color} itu sudah mati ";
        return $animals;
    }
    public function hunt(Animal $animal){
        $animals = "{$animal->name} itu sedang berburu mangsanya";
        return $animals;
    }
}
class Darat extends Animal{
    public $leg;
   
    public function __construct($name, $habitate, $color, $leg) {
        parent::__construct($name,$habitate,$color);
        $this->leg= $leg;
    }
    public function berjalan(Animal $animal){
        $animal = "{$this->name} itu hidupnya di {$this->habitate} dan warnanya {$this->color} dan dia  memiliki {$this->leg} kaki";
        return $animal;
    }
    

}
class Laut extends Animal{
    public function berenang(Animal $animal){
        $animal = "{$animal->name} itu hidupnya di {$animal->habitate} dan warnanya {$animal->color} dan dia  tidak memiliki kaki"; 
        return $animal;
    }
}

$monyet = new Darat("Monyet", "darat" , "coklat", 2 );
echo $monyet->hunt($monyet);

echo "<br>";

$ikan = new Animal("Ikan", "laut" , "biru", 0 );
echo $ikan->died($ikan);

echo "<br>";

$ikan = new Laut("Ikan pari", "laut" , "biru", 0 );
echo $ikan->berenang($ikan);

echo "<br>";

$badak = new Darat("Badak", "darat" , "abu", 4);
echo $badak->berjalan($badak);

echo "<br>";

$badak = new Animal("Badak", "darat" , "abu", 4);
echo $badak->died($badak);


