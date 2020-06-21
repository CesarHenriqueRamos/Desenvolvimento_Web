<?php 
    include('Exemplo.class.php');
    //instanciando 
    $exemplo = new Exemplo();
    //$exemplo->var2 = 'Cesar Henrique Ramos';
    $exemplo->setVar1('Cesar');
    echo $exemplo->pegaVar1();
    //echo $exemplo->var2;
    //echo '<hr>';
    //estatico
    //echo Exemplo::$var3;
?>