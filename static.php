<?php


class Tumbuhan{
    public static $name,
                     $fruit,
                     $vegetable ;
    
    

    public static function eat(){
        
        return "Budi memiliki buah " . self::$fruit . " dan dia suka makan sayur " . self::$vegetable  ;
    }
}
class Padang{
    public $food = "rendang";
    public $amount = 1;
    public function mokel(){
        return "Alwan telah makan {$this->food} sebanyak ". $this->amount++ ." kali pada bulan Ramadhan";
    }
}

Tumbuhan::$name = "Budi";
Tumbuhan::$fruit ="apel";
Tumbuhan::$vegetable ="kol";
echo Tumbuhan::eat();

echo "<br>";
echo "<hr>";

Tumbuhan::$name = "Aceng";
Tumbuhan::$fruit ="anggur";
Tumbuhan::$vegetable ="wortel";
echo Tumbuhan::eat();

echo "<br>";
echo "<hr>";

Tumbuhan::$name = "Anto";
Tumbuhan::$fruit ="mangga";
Tumbuhan::$vegetable ="timun";
echo Tumbuhan::eat();

echo "<br>";
echo "<hr>";

$makan = new Padang;
echo $makan->mokel();
echo "<br>";
echo $makan->mokel();
echo "<br>";
echo $makan->mokel();
echo "<br>";
echo $makan->mokel();
echo "<br>";
echo $makan->mokel();
echo "<br>";



