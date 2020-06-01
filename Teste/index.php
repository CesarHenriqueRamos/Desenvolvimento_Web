<?php
if(file_exists('file.txt')){
    echo 'o arquivo existe';
}else{
    $conteiner = "Novo Arquivo \r\n outra linha\r\noutra linha";
    file_put_contents('file.txt',$conteiner);
}
?>