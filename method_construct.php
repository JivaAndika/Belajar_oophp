<?php

class fruit{
    public $name,
           $taste,
           $color;
    public function namaBuah(){
        return $this->name . " ini rasanya " . $this->taste . " warnanya " . $this->color;
    }
    public function __construct($name,$taste,$color){
        $this->name = $name;
        $this->taste = $taste;
        $this->color = $color;
    }
}

$jeruk = new fruit("Jeruk", "asem" , "orange");
echo $jeruk->namaBuah();

echo "<br>";

$mangga = new fruit("Mangga", "manis" , "hijau");
echo $mangga->namaBuah();

echo "<br>";

$anggur = new fruit( "Anggur", "asem" , "ungu");
echo $anggur->namaBuah();