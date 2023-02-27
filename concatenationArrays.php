<?php

function getConcatenation($nums) {
    $size = sizeof($nums);
    $outer_loop = 2; // because concatenation of array means mapping the same array with the same array (twice)
    $ans = array();
    $outer_count = 1;

    while($outer_count <= 2){
        for($i=0;$i<$size;$i++){
            $ans[] = $nums[$i];
        }
        $outer_count++;
    }
    echo "<pre>";
    print_r($ans);
}
    $nums = [1,2,1];
    getConcatenation($nums);
    $nums = [1,3,2,1];
    getConcatenation($nums);
    $nums = [1,1];
    getConcatenation($nums);
    $nums = [1];
    getConcatenation($nums);
    $nums = [-1,1,0];
    getConcatenation($nums);
    $nums = [0];
    getConcatenation($nums);
?>