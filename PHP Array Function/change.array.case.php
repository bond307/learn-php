<?php 


//change array case 
$array = array(
    "nayon"=>"40",
    "sadiya"=>"20"
);
print '<pre>';
print_r(array_change_key_case($array, CASE_UPPER));