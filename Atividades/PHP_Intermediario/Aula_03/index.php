<?php

/* //funções
    function mostrarNome(){
        echo 'Nome é Cesar';
    }
    function verdade(){
    return true;
    }*/
//mostrarNome();

//funções de include e data
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y H:m:s');
echo $data;
//incluir
include('header.php');
?>