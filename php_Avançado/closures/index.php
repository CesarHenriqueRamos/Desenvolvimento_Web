<?php
class teste{
    public function test($n = null){
        if(is_callable($n)){
            //é uma função
            $n();
        }else{
            //não é uma função
            echo 'fim';
        }
        
    }
}
$exemplo = new teste();
$exemplo->test();
/*$exemplo->test(function(){
    echo 'oK';
});*/

?>