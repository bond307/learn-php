<?php 

//destructor
class std{
    public $name;
    public $roll;
    public $age; 

    public function __construct($name, $roll, $age){
        $this->name = $name;
        $this->roll = $roll;
        $this->age  = $age;
    }
    public function info(){
        echo "Your Name is: {$this->name} <br>Your Roll is: {$this->roll} <br> Your Age is: {$this->age}<br><br>";
    }
    public function __destruct(){
       if($this->age > 20){
           echo "You are senior";
       }else{
           echo "You are a joniour";
       }
    }
}

$obj = new std("Nayon Talukder", "918772", "21");
$obj->info();