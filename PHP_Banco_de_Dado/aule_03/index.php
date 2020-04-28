<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
//sem repetição de cargo
//$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY `cargo` LIMIT 1");
//emprime os tres primeiros id começando do 0
//ASC-> cresente
//DESC -> decrecente
//LIMIT -> primeiro parametro de onde ele começa,segundo parametro onde ele termina ex: 1,3 
$sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY `cargo` DESC LIMIT 3");
$sql->execute();
$dados = $sql->fetchAll();
foreach($dados as $key => $value){
    echo $value['nome'];
    echo '<hr>';
}

?>