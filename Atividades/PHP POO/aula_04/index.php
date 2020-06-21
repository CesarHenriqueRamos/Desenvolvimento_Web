<?php
include('interface1.php');
class Test implements interface1{
    function print($par){
        echo $par;
    }
}
$teste = new Test();
$teste->print('Hello Word');
?>