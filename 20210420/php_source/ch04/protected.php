<?php

class OutSider
{
    protected $s = "OutSider";
}

class OutSider2 extends OutSider
{
    public function echoS()
    {
        echo $this->s;
    }
}

$outSider = new OutSider2();
$outSider->echoS();

?>