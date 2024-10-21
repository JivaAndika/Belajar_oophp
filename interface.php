<?php
interface Istirahat{
     public function sleep();
     
     public function work();

}

abstract class Work{
    protected $name;

    public function __construct($name ="nama"){
        $this->name = $name;
    }

    
}
class Officer extends Work implements Istirahat{
  public function work(){
    return "Pak {$this->name} sedang bekerja";
  }

  public function sleep(){
    return "Pak {$this->name} sedang beristirahat";
  }
}



$diki = new Officer("Diki");
echo $diki->work();

echo "<br>";

$aceng = new Officer("Aceng");
echo $aceng->sleep();
