<?php //php 7.0.8
// Sundays in ont month
$m = readline();

$begin  = new DateTime("2018-$m");
$begin->modify('first day of this month');
$end = new DateTime("2018-$m");
$end->modify('last day of this month');

while ($begin <= $end) 
{
    if($begin->format("D") == "Sun") 
    {
        echo $begin->format("j") . "rd ".$begin->format("m").", ".$begin->format("Y")."\n";
    }

    $begin->modify('+1 day');
}
    
?>
