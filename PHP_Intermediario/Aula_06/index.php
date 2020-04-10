<?php
//session
session_start();
$_SESSION['nome'] = 'Cesar Henrique Ramos';
//para destruir uma session
unset($_SESSION['nome']);
//para destruir todas sessions
session_destroy();
//cookie
setcookie('nome','Cesar Henrique Ramos Cookie',time()+(60*60),'/');
echo $_COOKIE['nome'];
//resolução do problema da plataforma Evan
?>

<iframe width="420" height="315" src="https://www.youtube.com/embed/N1eB6C0zWDE" frameborder="0" allowfullscreen></iframe>