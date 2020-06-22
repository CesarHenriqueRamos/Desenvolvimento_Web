<?php
class one{

}
class two{

}
$a = new one();
$b = new two();
if($a instanceof one){
    //echo 'a variavel $a faz referencia a classe one';
}
function executa($a,$b='Cesar Henrique Ramos'){
    $a($b);
}
executa(function($nome){
    echo 'Ola '.$nome;
})
?>