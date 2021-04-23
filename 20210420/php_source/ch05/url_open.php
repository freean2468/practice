<?php

$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,'http://gnuwiz.com');
$content = curl_exec($curl);
curl_close($curl);
echo $content;

?>