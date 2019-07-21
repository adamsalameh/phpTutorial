<?php //php 7.0.8

$input = readline();
if (ctype_digit(strval($input))) {
    echo "int";
} elseif (is_numeric($input)) {
    echo "float";
} elseif (is_string($input)) {
    echo "string";
}
     var_dump((float)$input);
     
