<?php 

//array_key_exists()
//find key into array 
$color = array(
    $group_one = array(
        "a"=>"red",
        "b"=>"blue",
        "d"=>"green",
        "h"=>"pink"
    ),
    
    
);
//check if array is exists or not
if(array_key_exists("a", $group_one)){
    echo "This key is exists";

}else{
    echo "This key is not exits";
}