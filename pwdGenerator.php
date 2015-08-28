<?php

function pwdGenerator($min_length, $max_length){
    
    $array = [];
    
    $random_length = mt_rand($min_length, $max_length);
    
    for($i=0; $i<$random_length;$i++){
        
        $type = mt_rand(1,3);
        
        switch ($type) {
            
            case 1:
                $array[] = chr(mt_rand(48, 57)); // 0 => 9
                break;
            
            case 2:
                $array[] = chr(mt_rand(65, 90)); // A => Z
                break;
            
            case 3:
                $array[] = chr(mt_rand(97, 122)); // a => z
                break;
            
        }
        
    }
    
    return implode($array);
    
}

