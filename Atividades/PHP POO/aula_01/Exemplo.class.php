<?php
class Exemplo{
    private $var1;
    public $var2;
    public static $var3 = 'Statico';
    public function setVar1($var1){
        $this->var1 = $var1;
        
    }
    public function pegaVar1(){
        return $this->var1;
    }
}
?>