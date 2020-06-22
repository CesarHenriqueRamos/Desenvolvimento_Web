<?php
$func = function($nome){
    echo $nome;
};
//função dentro de função
function one(){
    function two(){
        echo 'Ola Mundo';
    }
    two();
}
//one();
$funcao = 'one';
//executa a função com mesmo nome
//call_user_func($funcao);

//detecta se é função
if(is_callable($func)){
    echo 'ola Mundo';
}
//$func('Cesar Henrique');
?>