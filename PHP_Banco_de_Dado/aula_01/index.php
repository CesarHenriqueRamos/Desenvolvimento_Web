<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
//entrada de dados
/*if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $data_hora = date('Y-m-d H:m:s');

    $sql = $pdo->prepare("INSERT INTO `clientes` VALUE(null,?,?,?)");
    $sql->execute(array($nome,$sobrenome,$data_hora));
    echo 'Cliente Inserido com Sucesso';
}*/
//update
if(isset($_POST['acao'])){
    $id = 9;
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $sql = $pdo->prepare('UPDATE `clientes` SET nome=?,sobrenome=? WHERE id=?');
    $sql->execute(array($nome,$sobrenome,$id));
    echo 'Atualisado com sucesso';
}
//no SQL
//OR funciona como ou 
//AND funciona como e
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome" id="">
        <input type="text" name="sobrenome" id="">
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>