<?php //php 7.0.8

function mostFrequestNumber($array){
    
    $number = 0;
    $bestNumber = 0;
    $frequent = 1;
    $maxFrequent = 0;
    
    for ($i = 0; $i<count($array); $i++){
        
       $number = $array[$i];
       $frequent = 1;
        
        for ($j = $i+1; $j<count($array); $j++){
            
            if ($number == $array[$j]){
                            
            $frequent++;
            
        }
        }
        if ($maxFrequent < $frequent){
            $maxFrequent = $frequent;
            $bestNumber = $number; 
        }
        
        
    }
    
    echo $bestNumber;
}


$array = explode(" ",readline());
mostFrequestNumber($array);
?>
