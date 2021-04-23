<?php

$i = 1;
while ($i <= 10)
{
    echo "{$i}<br/>";
    if($i === 10)
    {
        echo "\$i가 {$i} 이므로 while문은 종료됩니다.";
    }
    $i++;
}

?>