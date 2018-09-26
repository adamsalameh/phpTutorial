<?php //php 7.0.8

$input = readline();
if (ctype_digit(strval($input)))
    {
    echo "int";
    }
else if (is_numeric($input))
    {
    echo "float";
    }
else if (is_string($input))
     {
    echo "string";
    }
     var_dump((float)$input);          
          
    


          


?>
