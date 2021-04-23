<?php

class StaticTest
{
    public static $gnu_wiz = "static으로 선언된 변수입니다. <br/>";
    public static function  gnuWiz()
    {
        $gnu_wiz = "static으로 선언된 메소드입니다. <br/>";
        echo $gnu_wiz;
    }
}

echo StaticTest::$gnu_wiz;
StaticTest::gnuWiz();

?>