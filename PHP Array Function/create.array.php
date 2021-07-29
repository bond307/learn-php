<?php 
echo "--------- Single Array------------";
//single arragy 
$single_array = array("Nayon", "Mim", "Sadiya", "Talukder");
echo $single_array[2]."<br>";
//signle array print with for loop
$count = count($single_array);
for($i = 0; $i<$count; $i++){
    echo 'Name: '.$single_array[$i]."<br>";
}
echo '<br><br>';
echo "--------- Asosiative Array------------";
//Asosiative arragy 
$age = array(
    "Nayon" => "30",
    "Mim" => "15",
    "Taklukder" => "50",
    "Sadiya" => "25"
);
//print asositive array with foreach loop
foreach($age as $key=>$val){
    echo "Name: ".$key."<br>";
    echo "Age: ".$val."<br>";
}


echo '<br><br>';
echo "--------- Multidimensional Array------------<br>";

$multi_di_array = array(
    array("Nayon", "30", "cmt"),
    array("Mim", "12", "cmt"),
    array("Sadiya", "54", "ent"),
    
);
echo $multi_di_array[0][2];