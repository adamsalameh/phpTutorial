<?php //php 7.0.8

//Time Until New Year
$input = readline();
$year = substr($input,6,4);
$year++;
$newyear = new DateTime("1-1-$year 00:00:00");
$remain  = $newyear->diff(new DateTime($input));
$hours   =  $remain->days * 24 + $remain->h;
$minutes =  $hours * 60 + $remain->i;
$seconds =  $minutes * 60 + $remain->s;
echo "Hours until new year : $hours\n";
echo "Minutes until new year : $minutes\n";
echo "Seconds until new year : $seconds\n";
echo "Days:Hours:Minutes:Seconds ".$remain->days.":".$remain->h.":".$remain->i.":".$remain->s;
