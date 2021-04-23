<?php

final class FinalParent
{
    public $gnu_wiz = "final로 선언된 class 입니다.";

    final public  function gnuWiz()
    {
        echo "final로 선언된 메서드입니다.<br/>";
        echo $this->gnu_wiz;
    }
}

$gnuWiz = new FinalParent();
$gnuWiz->gnuWiz();

?>