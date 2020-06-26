<?php
session_start();
if(isset($_SESSION['login'])){
//arquivo esxclosivo para membos
$data['info'] = 'Informação exclusiva';

die(json_encode($data));
}else{
    die('arquivo Protegido');
}
?>