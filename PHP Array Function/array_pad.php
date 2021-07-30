<?php

//array_pad()
//insert sacific velu ar key in array 
$array = array("red", "green");
///left side add
$res = array_pad($array, -4, 'blue');
///right side add
$res_right = array_pad($array, 4, 'blue');
print "<pre>";

print_r($res);
print_r($res_right);