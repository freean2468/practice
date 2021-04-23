<?php

class Member
{
    public $m;
    public $m1 = "멤버변수입니다.";

    public function __construct()
    {
        $m = "지역변수입니다.";
        echo "{$m}<br/>";
    }
}

$member = new Member();
echo "초기화하지 않은 멤버변수 : {$member->m} <br/>";
echo "초기화한 멤버 변수 : {$member->m1} <br/>";

?>