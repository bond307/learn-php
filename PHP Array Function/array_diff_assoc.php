<?php 

//array diff assoc()
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
        "c"=>"green"
    )
    
);
$array_diff = array_diff_assoc($group_one, $group_two);
print "<pre>";
print_r($array_diff);