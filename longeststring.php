<?php 
function longestEvenString($str){
    
    $results = explode(" ",$str);
    
    $longest_word = '';
    $size_of_word = 0;
    
    foreach($results as $key=>$value){
        $count = 0;
        $size_of_word = strlen($value);
        $longest_word = '';
        while($count < strlen($value)){
            $longest_word .= $value[$count];
            $count++;
        }
        // echo $longest_word.'<br>';
        if($size_of_word % 2 == 0){
            return $longest_word;
        }
        else{
            $longest_word = '';
        }
        
    }

}

$str = "Thi is test";
$result = longestEvenString($str);
echo $result.'<br>';

$str = "str has now a str lengthh even";
$result = longestEvenString($str);
echo $result.'<br>';

$str = "Thi iss t1est";
$result = longestEvenString($str);
echo $result.'<br>';

$str = "Thi iss t1est";
$result = longestEvenString($str);
echo $result.'<br>';

?>