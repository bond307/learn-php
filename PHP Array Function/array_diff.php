<?php 

//array diff()
$color = array(
    $group_one = array(
        "a"=>"red",
        "b"=>"blue",
        "c"=>"green",
        "d"=>"dark",
        "h"=>"pink"
    ),
    $group_two = array(
        "a"=>"red",
        "b"=>"blue",
        "c"=>"green"
    ),
    $group_three = array(
        "a"=>"red",
        "b"=>"blue",
        "c"=>"green",
       
    )
    
);
$array_diff = array_diff($group_one, $group_two, $group_three);
print "<pre>";
print_r($array_diff);