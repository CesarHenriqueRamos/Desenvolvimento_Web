<?php
$nome = 'Cesar';
$teste = function() use ($nome){
    echo 'ola '.$nome;
};
$teste();
?>