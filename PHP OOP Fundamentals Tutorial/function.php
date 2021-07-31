<?php 

class Calculation{
    public function add($a, $b){
        echo "Sum: ".$a+$b."<br>";
    }
    public function sub($a, $b){
        echo "Sub: ".$a-$b."<br>";
    }
    public function mul($a, $b){
        echo "Mul: ".$a*$b."<br>";
    }
    public function div($a, $b){
        echo "Div: ".$a/$b."<br>";
    }
}