<?php

$i = [
    'www',
    'gnuwiz',
    'com',
];

echo implode($i)."<br/>";
echo implode('.', $i)."<br/>";
echo "<br/>";

echo join($i)."<br/>";
echo join('.', $i)."<br/>";
echo "<br/>";

?>