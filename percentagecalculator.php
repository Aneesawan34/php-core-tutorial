<?php

$percenNum = 72;

if($percenNum >79 && $percenNum <=100){
    echo "your Percentage is " . $percenNum . "and grade is A+";
}
elseif($percenNum >69 && $percenNum <=79){
    echo "your Percentage is " . $percenNum . "and grade is A";
}
elseif($percenNum >59 && $percenNum <=69){
    echo "your Percentage is " . $percenNum . "and grade is B";
}
elseif($percenNum >49 && $percenNum <=59){
    echo "your Percentage is " . $percenNum . "and grade is C";
}
elseif($percenNum >39 && $percenNum <=49){
    echo "your Percentage is " . $percenNum . "and grade is D";
}
elseif($percenNum <=39){
    echo "your Percentage is " . $percenNum . "and you are fail";
}
else {
    echo "you Entered wrong percentage";
}
?>