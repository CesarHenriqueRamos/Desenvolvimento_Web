<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$autoload = function($class){
    if($class == 'Email'){
        require_once('classes/phpmailer/PHPMailerAutoLoad.php');
    }
    include('../../classes/'.$class.'.php');
};

spl_autoload_register($autoload);
define('INCLUDE_PATH','http://localhost/Meus_Projetos/Desenvolvimento_Web/Desenvolvimento_Web/Sistema_de_gest%c3%a3o_de_clientes/');
define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

define('BASE_DIR_PAINEL',__DIR__.'/painel');

//Conectar com banco de dados!
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','gestor_clientes');

?>