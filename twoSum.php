<?php

function twoSum($nums, $target) {
    $indeces = array();
    $size = sizeof($nums);
    $twoSum = 0;
    $initial = $nums[0];
    $count = 0;

    if($size == 1){
        if($nums[0] == $target){
            $indeces = 0;
        }
        else{
            return 'Not found';
        }
    }
    
    while($count+1<=$size){
        
        if($count != 0){
            $initial = $nums[$count];
        }
        for($i=$count+1;$i<$size;$i++){
            $twoSum = $initial + $nums[$i];
            if($twoSum == $target){
                array_push($indeces,$count,$i);
                
            }
        }
        $count++;
    }

    echo "<pre>";
    print_r($indeces);
}
$nums = [2,11,7,15]; $target = 9;
twoSum($nums,$target);
$nums = [3,3]; $target = 6;
twoSum($nums,$target);
$nums = [3,2,4]; $target = 6;
twoSum($nums,$target);
$nums = [3]; $target = 3;
twoSum($nums,$target);
$nums = [3,6,9,11,21]; $target = 30;
twoSum($nums,$target);
?>