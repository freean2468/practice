<?php

$timestamp = mktime(0,0,0,2,9,2018);

date_default_timezone_set("America/New_York");

echo date('Y-m-d H:i:s',$timestamp)."<br/>";

date_default_timezone_set("Asia/Seoul");

echo date('Y-m-d H:i:s',$timestamp)."<br/>";

?>