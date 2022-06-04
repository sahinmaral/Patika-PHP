<?php 

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "",NULL];

function myFunction($arr,$count){
    $filteredArray = array_filter($arr,function($value){
        if($value !== "" && $value !== NULL){
            return $value;
        }        
    });

    $randomizedArray = array_rand($filteredArray,$count);

    $new_array = array();

    foreach ($randomizedArray as $key) {
        array_push($new_array,$filteredArray[$key]);
    }
    
    return $new_array;
}


print_r(myFunction($planets, 2)); echo "<br/>";
print_r(myFunction($planets, 3)); echo "<br/>";
print_r(myFunction($planets, 2)); echo "<br/>";
print_r(myFunction($planets, 4)); echo "<br/>";
print_r(myFunction($planets, 5)); echo "<br/>";

?>