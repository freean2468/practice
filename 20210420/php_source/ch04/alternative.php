<?php

echo "if 대체문법 <br/>";
$score = 100;
if($score == 100):
?>
    점수는 100점입니다<br/>
<?php
elseif ($score == 90):
?>
    점수는 90점입니다<br/>
<?php
else:
?>
    점수는 90점 미만입니다.<br/>
<?php
endif;
echo "for 대체문법 <br/>";
for ($i = 0 ; $i <= 10 ; $i++):
?>
    <div><?php echo $i;?>번</div>
<?php
endfor;

echo "while 대체문법 <br/>";
$i = 0;
while($i <= 10):
?>
<div><?php echo $i;?>번</div>
<?php
$i++;
endwhile;

?>
