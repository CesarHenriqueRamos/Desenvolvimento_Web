<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
//lock tables
$sql = $pdo->prepare("LOCK TABLEs `cargos` WRITE");

$sql->execute();
$dados = $sql->fetchAll();
foreach($dados as $key => $value){
    echo $value['nome'];
    echo '<br>';
    echo $value['nome_cargos'];
    echo '<hr>';
}

?>