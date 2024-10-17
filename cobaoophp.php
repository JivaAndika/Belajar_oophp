<?php

class Person{

    public $namePerson;
    public $umurPerson;
    public $asalPerson;
     function setPerson($name,$umur,$asal){
        $this->namePerson = $name;
        $this->umurPerson = $umur;
        $this->asalPerson = $asal;
        
    }

    function getPerson(){
        return "Nama:" . $this->namePerson ." Umur:" .  $this->umurPerson . " Asal:". $this->asalPerson;
    }
};



$joni = new Person();
$aceng = new Person();

$joni->setPerson("Joni", "20","Jakarta");
$aceng->setPerson("Aceng", "32","Boyolali");


echo $joni->getPerson();
echo "<br>";
echo $aceng->getPerson();

