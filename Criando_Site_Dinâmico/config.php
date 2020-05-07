<?php
    define('INCLUDE_PATH', 'http://localhost/Meus_Projetos/Desenvolvimento_Web/Desenvolvimento_Web/Criando_Site_Din%C3%A2mico/');
    $autoload = function($class){
        echo $class;
    };
    spl_autoload_extensions($autoload);
?>