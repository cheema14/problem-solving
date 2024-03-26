<?php
/* 
2 integers (m,n)


return all prime numbers between and including them

*/
function primeNumbs($m,$n){
    
    if($m <=0 || $n <= 0){
        return false;
    }

    if($m > $n){
        return false;
    }
    
    $min = $m;
    $prime_nums = $range = array();
    
    for($i=$min;$i<=$n;$i++){
        $min = $i;
        
        if($min == 2 || $min == 3){
            array_push($prime_nums,$min);
        }
        
        if($min % 1 == 0 && $min % $min == 0 && $min % 2 != 0 && $min % 3 != 0){
            array_push($prime_nums,$min);
        }
        
        array_push($range,$i);

    }   
    echo "<pre>";
    echo "The Range:<br>";
    print_r($range);
    echo "<br>";
    echo "Result:";
    print_r($prime_nums);
    echo "<br>";
    
}

primeNumbs(2,15);