<?php

echo substr('gnuwiz', 1)."<br/>";
echo substr('gnuwiz', 1, 3)."<br/>";
echo substr('gnuwiz', 0, 4)."<br/>";
echo substr('gnuwiz', 0, 8)."<br/>";
echo substr('gnuwiz', -1, 1)."<br/>";
echo "<br/>";

$email  = 'info@gnuwiz.com';
$domain = strstr($email, '@');
echo $domain."<br/>";

$user = strstr($email, '@', true);
echo $user."<br/>";


$pos = strpos($email, "@");
echo $pos."<br/>";

$pos2 = strpos($email,'-');
if($pos2 === false)
{
    echo "발견되지 않음<br/>";
}else{
    echo $pos2."위치에 있음<br/>";
}

?>