<?php
//recortar String
$conteudo = 'Cesar Henrique Ramos';
//echo substr($conteudo, 0, 5);
//recortar por parametro
$nomes = explode(' ',$conteudo);
//print_r($nomes);
//transforma um array em uma String
$nome = implode(' ', $nomes);
//echo $nome;
//Switch
$var = 'Cesar';
switch($var){
    case 'Cesar':
        echo 'Programador';
    break;
    case 'Joao':
        echo 'Analista';
    break;
    default:
    echo 'Nenhuma das Alternativas';
}



?>