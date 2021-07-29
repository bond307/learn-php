<?php 
// array colume 
$info = array(
    array(
        "id"=>"101",
        "name"=> "Nayon",
    ),
    array(
        "id"=>"102",
        "name"=> "Talukder",
    ), 
    array(
        "id"=>"103",
        "name"=> "Sadiya",
    )
);

$array_colum = array_column($info, "name", "id");

print"<pre>";
print_r($array_colum);