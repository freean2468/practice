<?php

final class FinalParent
{
    public $gnu_wiz = "final로 선언된 class 입니다.";

    final public  function gnuWiz()
    {
        echo "final 로 선언된 메서드입니다.<br/>";
        echo $this->gnu_wiz;
    }
}

class Child extends FinalParent
{

}

$childGnuWiz = new Child();
$childGnuWiz->gnuWiz();

?>