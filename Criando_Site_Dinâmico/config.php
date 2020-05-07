<?php
    $autoload = function($class){
        if($class == 'Email'){
            include('classes/phpmailer/PHPMailerAutoload.php');
        }
        include('classes/'.$class.'.php');
    };
    spl_autoload_register($autoload);
    define('INCLUDE_PATH', 'http://localhost/Meus_Projetos/Desenvolvimento_Web/Desenvolvimento_Web/Criando_Site_Din%C3%A2mico/');
    
?>