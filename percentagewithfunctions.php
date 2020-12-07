<?php
function sum($subOne, $subTwo, $subThree){
    $total = $subOne + $subTwo + $subThree;
    return $total;
}

function percentage($total){
    $per = $total/3;
    echo "$per%";
}

$sum = sum(55,65,88);

percentage($sum);
?>