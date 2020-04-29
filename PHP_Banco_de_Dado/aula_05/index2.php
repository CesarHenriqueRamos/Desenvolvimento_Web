<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
//sql query
//lock tables
//$sql = $pdo->prepare("LOCK TABLEs `cargos` WRITE");
//LIKE otimo para pesquisar com 
//$sql = $pdo->prepare("SELECT * FROM `cargos` WHERE email LIKE '%@g%'");
//IN doas id 1 e 10
$sql = $pdo->prepare("SELECT * FROM `cargos` WHERE id IN (1,10)");
//BETWEEN otimo para datas, para analisar um intervalo de data 
$sql = $pdo->prepare("SELECT * FROM `cargos` WHERE data BETWEEN '2020-01-01' AND '2020-02-01'");
//Subquery
$sql = $pdo->prepare("SELECT * FROM `filme` WHERE `categoria_id` = (SELECT categoria_id FROM `categorias` WHERE nome = 'terror')");
?>