<?php 

$color = "red";
function echoColor() {
    global $color;
    echo $color;
}
echoColor();

?>