<?php
function test(){
   static $n = 0;
    $n ++;
    return $n;
}
echo test();
echo '<br>';
echo test();
?>