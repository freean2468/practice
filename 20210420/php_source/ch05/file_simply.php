<?php

$filename = "text.txt";
$content = file_get_contents($filename);
echo nl2br($content);

?>