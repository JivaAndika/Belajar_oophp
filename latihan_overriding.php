<?php

class Employee{
    public $name;
    protected $position;

    public function __construct($name, $position){
        $this->name = $name;
        $this->position = $position;
    }
    public function getInfo(Employee $employee){
        $employees = "{$employee->name} ini jabatannya {$employee->position} ";
        return $employees;
    }
}

class Manager extends Employee{
    private $teamSize;

    public function __construct($name, $position, $teamSize){
        parent::__construct($name,$position);
        $this->teamSize = $teamSize;
    }
    public function getInfo(Employee $employee){
        $employee = "Manajer dari sebuah tim yang terdiri dari {$this->teamSize} orang ";
        return $employee;
    }
}


$security = new Employee("Aceng", "satpam");
echo $security->getInfo($security);

echo "<br>";

$cleaningService = new Employee("Basari","OB");
echo $cleaningService->getInfo($cleaningService);

echo "<br>";

$manager = new Manager("Kumar","manager", 12);
echo $manager->getInfo($manager);

echo "<br>";
