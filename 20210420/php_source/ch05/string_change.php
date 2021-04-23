<?php

$i = "hello gnuWiz.com";

echo strtoupper($i)."<br/>";
echo strtolower($i)."<br/>";
echo ucfirst($i)."<br/>";
echo ucwords($i)."<br/>";
echo lcfirst($i)."<br/>";

$j = strtr($i,"hello","Welcome to");
echo $j."<br/>";

$replace_pairs = [
    'hello'=>'Welcome',
    'gnuWiz'=>'php',
    'com'=>'co.kr'
];

$k = strtr($i,$replace_pairs);
echo $k."<br/>";

?>