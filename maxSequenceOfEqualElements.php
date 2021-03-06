<?php //php 7.0.8

function maxSequenceOfEqualElements($array)
{
    $start = 0;
    $length = 1;
    $bestStart = 0;
    $bestLength = 1;    
    for ($i = 1; $i<count($array); $i++) {
        if ($array[$start] == $array[$i]) {
            $length++ ;
        } else {
            $start = $i;
            $length = 1;
        }
        if ($bestLength < $length) {
            $bestLength = $length;
            $bestStart = $start;
        }
    }
    echo implode(" ",array_slice($array,$bestStart,$bestLength));  
}

$array = explode(" ",readline());
maxSequenceOfEqualElements($array);
