<?php 

class Solution {

    /**
     * @param String[] $names
     * @param Integer[] $heights
     * @return String[]
     */
    function sortPeople($names, $heights) {
        
        for($i=0;$i<sizeof($heights);$i++){
            for($j=0;$j<sizeof($heights);$j++){
                if($heights[$j] < $heights[$i]){
                    
                    $tmp = $heights[$i];
                    $heights[$i] = $heights[$j];
                    $heights[$j] = $tmp;

                    $tmpName = $names[$i];
                    $names[$i] = $names[$j];
                    $names[$j] = $tmpName;
                }
            }
        }

        return $names;
    }
}

$names = ["Mary","John","Emma"]; 
$heights = [180,165,170];

$object = new Solution();
$obb = $object->sortPeople($names,$heights);
echo '<pre>';
echo "The Data passed:<br>";
print_r($names);
print_r($heights);
echo "<br>";
echo "The Result:<br>";
print_r($obb);
?>