<?php
function test1($arg1, $arg2 = "default")
{
} 

test1("tt"); // 올바른 방법 

function test2($arg1 = "default", $arg2) 
{
} 

test2("tt"); // 오류
test2("aa","bb"); // 올바른 방법 