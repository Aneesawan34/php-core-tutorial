<?php

function wow(){
    $a = "variable function";
    return $a;
}

$b = "wow";
echo $b();
echo "<br />";

$anonymous = function(){
    echo "Anonymous Function";
};

$anonymous();

// echo $b();
?>