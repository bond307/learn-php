<?php 

//array_intersect_key()
//match array only with key
$color = array(
    $group_one = array(
        "a"=>"red",
        "b"=>"blue",
        "d"=>"green",
        "h"=>"pink"
    ),
    $group_two = array(
        "a"=>"red",
        "b"=>"blue",
        "d"=>"dark",
        "c"=>"green"
    )
    
);
$array_diff = array_intersect_key($group_one, $group_two);
print "<pre>";
print_r($array_diff);