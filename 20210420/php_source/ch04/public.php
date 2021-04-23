<?php

include "parents.php";

class Parents2 extends Parents
{
    public function echoPar()
    {
        echo $this->par;
    }
}

$parents = new Parents2();
$parents->echoPar();

?>