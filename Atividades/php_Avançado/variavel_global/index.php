<?php
$nome = 'Cesar';
function test(){
    global $nome;
    echo $nome;
}
test();
?>