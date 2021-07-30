<?php

//array_pup()
//delete into  last array element in the  
$array = array("red", "green", "blue");

//delete last elements in array 
array_pop($array);

array_push($array, "white");

print "<pre>";
print_r($array);