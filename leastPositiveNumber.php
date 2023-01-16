<?php

// Given an array of real numbers. 
//Find the smallest positive integer which is not present in the array. 
// [-6,-8,2,78,100,25,5] 
// Return 2 because 2 is less than 3 and is positive 

$numbers = [-10,-98,120,29,1,-67,-291,100,20,-9,6]; 
$size_arry = sizeof($numbers);
$positive_numbers = array(); 
$smallest = 0; 


for($i=0;$i<$size_arry;$i++){ 
    if($numbers[$i] >= 0){ 
        // $numbers.pop($numbers[$i]);
        $positive_numbers[] = $numbers[$i];
    }
    else{
        die('No positive number found in array');
    } 
} 

sort($positive_numbers);

if($positive_numbers[0] != 1){
    $smallest = $positive_numbers[0] - 1;
    echo "The smallest positive integer is:".$smallest."<br>";
}
else{
    $smallest = $positive_numbers[0];
    echo "The smallest positive integer is:".$smallest."<br>";
}