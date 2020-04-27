<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
//delete
$id = 9;
  
    $sql = $pdo->prepare('DELETE FROM `clientes` WHERE id=?');
    $sql->execute(array($id));
    echo 'Deletado com sucesso';
?>