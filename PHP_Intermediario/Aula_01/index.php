<?php
//array sigle
$arr = ['Cesar','Henrique','Ramos'];
//array multidimencional
$arr = [array('Cesar'),array(25)];
foreach($arr as $key => $value){
    echo $key;
    echo '=>';
    echo $value;
    echo '<hr>';
}


?>