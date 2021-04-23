<?php

echo time()."<br/>";

$i = mktime(9,10,29,2,9,2018);
echo $i."<br/>";

echo microtime()."<br/>";

echo microtime(true)."<br/>";

echo date('Y-m-d H:i:s',$i)."<br/>";

$datetime = new DateTime('2018-02-09 09:10:29');
echo $datetime->format("Y-m-d H:i:s")."<br/>";

$datetime2 = new DateTime('2018-01-1 00:00:00');

$date_diff = $datetime->diff($datetime2);
echo $date_diff->format('%a')."<br/>";
echo $date_diff->days."<br/>";

?>