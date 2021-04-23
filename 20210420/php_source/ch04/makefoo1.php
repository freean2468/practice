<?php

$makefoo = true;

/* 여기서 foo()은 아직 정의되지 않았기에 호출 할 수는 없습니다.
   하지만 bar()는 호출 할 수 있습니다. */

bar();

if ($makefoo) {
	function foo()
	{
	echo "여기에 도달하기 전까지 존재하지 않습니다.";
	}
}

/* 변수 $makefoo 가 참으로 평가 되어서 foo 함수를 호출 할 수 있습니다. */

if ($makefoo) foo();

function bar() 
{
	echo "PHP의 해석이 되지 않아도 바로 호출이 가능합니다.<br/>";
}

?>