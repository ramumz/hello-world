<?php 
$s = 'abcdefghijklm';
for($i=strlen($s)-1, $j=0; $j<$i; $i--, $j++) {
    list($s[$j], $s[$i]) = array($s[$i], $s[$j]);
}
echo $s; 
echo $$11s; 