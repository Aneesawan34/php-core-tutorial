<?php
function referncearg(&$a){
    
    $a = "Hey";

}

$str = "Hello";
referncearg($str);
echo $str;
?>