<?php


function defangIPaddr($address) {
        
    $validIpAddr = substr_count($address,".");
    
    if($validIpAddr < 3 || $validIpAddr > 3){   
      echo "invalid format:<strong>".$address.'</strong>';
    }
    else{
      echo str_replace(".","[.]",$address);
    }


}


defangIPaddr("8.8.8.8.8");
defangIPaddr("8.8.8.8");
defangIPaddr("255.0.0.0");