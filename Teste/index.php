<?php
if(file_exists('file.txt')){
    echo 'o arquivo existe';
}else{
    $conteiner = 'Novo Arquivo';
    file_put_contents('file.txt',$conteiner);
}
?>