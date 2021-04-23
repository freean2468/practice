<?php

$a = 23;
$b = 42;

$ar = deg2rad($a);
$br = deg2rad($b);

$radian_0 = deg2rad(0);
$radian_30 = deg2rad(30);
$radian_45 = deg2rad(45);
$radian_60 = deg2rad(60);
$radian_90 = deg2rad(90);
echo $radian_0."<br/>";
echo $radian_30."<br/>";
echo $radian_45."<br/>";
echo $radian_60."<br/>";
echo $radian_90."<br/>";
echo "<br/>";

echo sin($radian_0)."<br/>";
echo sin($radian_30)."<br/>";
echo sin($radian_45)."<br/>";
echo sin($radian_60)."<br/>";
echo sin($radian_90)."<br/>";
echo "<br/>";

echo cos($radian_0)."<br/>";
echo cos($radian_30)."<br/>";
echo cos($radian_45)."<br/>";
echo cos($radian_60)."<br/>";
echo cos($radian_90)."<br/>";
echo "<br/>";

echo tan($radian_0)."<br/>";
echo tan($radian_30)."<br/>";
echo tan($radian_45)."<br/>";
echo tan($radian_60)."<br/>";
echo tan($radian_90)."<br/>";
echo "<br/>";

echo sin($ar + $br)."<br/>";
echo sin($ar) * cos($br) + cos($ar) * sin($br)."<br/>";
echo "<br/>";

echo sin($ar - $br)."<br/>";
echo sin($ar) * cos($br) - cos($ar) * sin($br)."<br/>";
echo "<br/>";

echo cos($ar + $br)."<br/>";
echo cos($ar) * cos($br) - sin($ar) * sin($br)."<br/>";
echo "<br/>";

echo cos($ar - $br)."<br/>";
echo sin($ar) * sin($br) + cos($ar) * cos($br)."<br/>";
echo "<br/>";

$sin_ar = sin($ar);
$asin_ar = asin($sin_ar);

echo $ar."<br/>";
echo $sin_ar."<br/>";
echo $asin_ar."<br/>";

?>