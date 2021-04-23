<?php
function foo() 
{
	function bar() 
	{
		echo "foo()를 호출하기 전까지는 존재하지 않습니다.\n";
	}
}

/* bar()를 호출할 수 없습니다.
 아직 존재하지 않습니다. */

foo();

/* 이제 bar()를  호출할 수
 있습니다. foo()를 실행하여
 접근할 수 있게 되었습니다. */

bar();

?>