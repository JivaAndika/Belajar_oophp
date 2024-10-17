<?php

class fruit{
    public $name,
           $taste,
           $color;
    public function namaBuah(){
        return $this->name . " ini rasanya " . $this->taste . " warnanya " . $this->color;
    }
}

$jeruk = new fruit();
$jeruk->name = "Jeruk";
$jeruk->taste = "asem";
$jeruk->color = "orange";
echo $jeruk->namaBuah();

echo "<br>";

$mangga = new fruit();
$mangga->name = "Mangga";
$mangga->taste = "manis";
$mangga->color = "hijau";
echo $mangga->namaBuah();

echo "<br>";

$anggur = new fruit();
$anggur->name = "Anggur";
$anggur->taste = "asem";
$anggur->color = "ungu";
echo $anggur->namaBuah();