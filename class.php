<?php

class animal{
    public $nama,
           $suara,
           $spesies;

    public function animalSound(){
        return  $this->nama . ' itu ' . 'bersuara: ' . $this->suara;
    }
    
}




$kucing = new animal();
$kucing->nama ="kucing" ;
$kucing->suara ="meong" ;
echo $kucing->animalSound();

