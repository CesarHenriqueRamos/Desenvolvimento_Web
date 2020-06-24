<?php
//cast
$numero = (int) '20';
//var_dump($numero);
//classe anonima
/*class Ultil{
    public function Msg($msg){
        $msg->showMenssagem();
    }
}
$ultil = new Ultil();
$ultil->Msg(new Class{
    public function showMenssagem(){
        echo 'Ola Mundo';
    }
});*/
//logs
date_default_timezone_set('America/Sao_Paulo');
$variavel = 'Cesar';
if($variavel == 'Cesar'){
    //error_log("\n".date('d/m/Y H:i:s').' Não é o que eu quero',3,'erro_log-log');
}
//tratamento de erro usando Try catch
/*class Teste{
    public function exemplo($par){
        if($par != 10){
            Throw new Exception("Ocorreu um Erro");
        }else{
            echo 'Sucesso';
        }
    }
}

$teste = new Teste();
try{
    $teste->exemplo(20);
}catch( Exception $e){
    echo $e->getMessage();
}*/
//expresoes regulares com replace //substituição
$original = 'cesar@gmail.com';
$modificado = preg_replace('/(.*?)@(.*?)$/','$1@dankiCode.com',$original);
echo $modificado;
?>