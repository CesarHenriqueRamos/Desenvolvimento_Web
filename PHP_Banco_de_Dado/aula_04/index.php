<?php
include('MySql.php');
define("HOST", "localhost");
define('DB','modulo_8');
define('USER', 'root');
define('PASS', '');

//classe Otimizada
date_default_timezone_set('America/Sao_Paulo');
//$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
$mysql = new MySql();
$mysql::connect();

?>