<?php

class Animal{
    private $name,
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
    public function setName(Animal $name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setHabitate(Animal $habitate){
        $this->habitate = $habitate;
    }
    public function getHabitate(){
        return $this->habitate;
    }
    public function setColor(Animal $color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
    
}

class Darat extends Animal{
    public $leg;
    public function __construct($name, $habitate, $color, $leg) {
        parent::__construct($name,$habitate,$color);
        $this->leg= $leg;
    }
    public function berjalan(Animal $animal){
        $animal =  $this->getName() . " itu hidupnya di". $this->getHabitate() .  " dan warnanya ". $this->getColor() . "dan dia  memiliki {$this->leg} kaki";
        return $animal;
    }
}

class Laut extends Animal{
    public function berenang(Animal $animal){
        $animal = $this->getName() . " itu hidupnya di". $this->getHabitate() .  " dan warnanya ". $this->getColor() . "dan dia  tidak memiliki kaki"; 
        return $animal;
    }
}

$monyet = new Darat("Monyet", "darat" , "coklat", 2 );
echo $monyet->hunt($monyet);

echo "<br>";

$ikan = new Animal("Ikan", "laut" , "biru"  );
echo $ikan->died($ikan);

echo "<br>";

$ikan = new Laut("Ikan pari", "laut" , "biru");
echo $ikan->berenang($ikan);

echo "<br>";

$badak = new Darat("Badak", "darat" , "abu", 4);
echo $badak->berjalan($badak);

echo "<br>";

$badak = new Animal("Badak", "darat" , "abu");
echo $badak->died($badak);


