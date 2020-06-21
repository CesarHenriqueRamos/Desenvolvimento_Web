<?php
abstract class Teste{
    public function teste1(){
        echo 'Chamando a função Teste';
    }
}
class principal extends Teste{
    static function minhaclasse(){
        echo 'Minha Classe';
    }
    function imprecao(){
        //self é usado para chamar um metodo estatico
        self::minhaclasse();
    }
}
$principal = new Principal;
$principal->imprecao();
?>