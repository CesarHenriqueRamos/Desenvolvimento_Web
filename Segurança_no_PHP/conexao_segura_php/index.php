<?php
    try{
       $pdo = new PDO('mysql:host=localhost;dbname=test','root',''); 
       //modo de desenvolvimento
       $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        //echo $e->getMessage();
        echo 'Não pode se conectar, tente mais tarde';
    }
    
?>