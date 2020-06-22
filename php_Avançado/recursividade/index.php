<?php
//recursividade
teste();
function teste(){
    static $i = 0;
    echo 'Chamando a função<br>';
    $i++;
    if($i < 3){
        teste();
    }
}

?>