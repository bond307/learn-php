<?php 

//array_diff_key()
$color = array(
    $group_one = array(
        "a"=>"red",
        "b"=>"blue",
        "t"=>"green",
        "d"=>"dark",
        "h"=>"pink"
    ),
    $group_two = array(
        "a"=>"red",
        "b"=>"blue",
        
        "d"=>"dark",
        "c"=>"green"
    )
    
);
$array_diff = array_diff_key($group_one, $group_two);
print "<pre>";
print_r($array_diff);