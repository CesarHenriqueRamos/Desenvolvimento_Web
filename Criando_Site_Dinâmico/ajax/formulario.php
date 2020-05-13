<?php
include('../config.php');
$data = [];
$assunto = 'Nova mensagem no Saite';
$corpo = '';
foreach($_POST as $key => $value){
    $corpo .=ucfirst($key).": ".$value;
    $corpo.='<hr>';
}
$info = array('assunto'=> $assunto, 'corpo'=>$corpo);
$chamaEmail = new Email('nome da hospedagem','email de envio na hospedagem','senha do email','Nome de Quem ta enviando ex:Cesar Henrique Ramos');
$chamaEmail->addAdress('email@evan.net.br',"Cesar Henrique");
$chamaEmail->formatarEmail($info);
    /*if($chamaEmail->enviarEmail()){
        $data['sucesso'] = true;
    }else{
        $data['erro'] = true;
    }*/
    $data['retorno'] = 'Sucesso';
    die(json_encode($data));
?>