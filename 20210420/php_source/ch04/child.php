<?php

include "parents.php";

class Child extends Parents
{
    public function echoPar()
    {
        echo $this->par;
    }
}

$child = new Child();
$child->echoPar();

?>