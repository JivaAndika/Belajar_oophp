<?php

class Magic{

    public function magiConst(){
        return "Sekarang saya berada di file ". __FILE__ ." di dalam class " . __CLASS__ . " dan di dalam function " . __FUNCTION__  ." yang berada di baris " . __LINE__ ;
    }
}

define("DIED","mati");
const ANIMAL = "Anjing" ;
 
 function mati(){
    return ANIMAL . " itu telah " . DIED;
}

echo mati();
echo "<br>";
$magiConst = new Magic();
echo $magiConst->magiConst();


    