<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=test','root',''); 
if(isset($_POST['login']) && !isset($_SESSION['login'])){
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['token'] = uniqid();
    $sql = $pdo->prepare("delete from tb_login Where login = ?");
    $sql->execute(array($_SESSION['login']));
    $sql = $pdo->prepare("insert into tb_login values(null,?,senha,?)");
    $sql->execute(array($_SESSION['login'],$_SESSION['token']));
}
if(!isset($_SESSION['login'])){
    echo '<form action="" method="post"><input type="text" name="login" id=""><input type="submit" name="acao"></form>';
}else{
    $login = $_SESSION['login'] ;
    $token =$_SESSION['token'];
    $check = $pdo->prepare("select * FROM tb_login Where login =? AND token = ?");
    $check->execute(array($login,$token));
    if($check->rowCount() === 1){
        echo 'Ola '.$_SESSION['login'];
    }else{
        echo 'Voce sera deslogado';
        session_destroy();
    }
    
}
?>
