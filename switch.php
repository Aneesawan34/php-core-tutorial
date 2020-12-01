<?php

$age = 20;

switch(true){
    case ($age >=18 && $age<=24):
        echo "You are Eligible";
        break;
    case ($age < 18 && $age<=24):
        echo "You are not Eligible";
        break;
    default:
    echo "You Entered wrong value";
}
?>