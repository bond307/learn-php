<?php 

//array_intersect_assoc()
//match array with key
$color = array(
    $group_one = array(
        "a"=>"red",
        "b"=>"blue",
        "t"=>"green",
        "h"=>"pink"
    ),
    $group_two = array(
        "a"=>"red",
        "b"=>"blue",
        "d"=>"dark",
        "c"=>"green"
    )
    
);
$array_diff = array_intersect_assoc($group_one, $group_two);
print "<pre>";
print_r($array_diff);