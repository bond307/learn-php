<?php 

//_constactructor
class Person{
    public $name;
    public $age;

    public function __construct($PersonName, $PersonAge){
        $this->name = $PersonName; 
        $this->age = $PersonAge;
    }

    public function persnDetails(){
        echo "Person Name Is: {$this->name} and person age is: {$this->age}";
    }
}

$obj = new Person("Nayon", "30");
$obj->persnDetails();
