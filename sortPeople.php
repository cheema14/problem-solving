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
$object->sortPeople($names,$heights);

?>