<?php
    //classe final
    //não pode ser erdada
    //erança erda propriedade de outra class
    /**tipos de acessos
     * private -> so tem acesso dentro da classe
     * protected -> só tem acesso na classe pai e filha
     * public -> todos tem acesso
     */
    final class Filha extends Pai{
        public function printHello(){
            echo 'Hello Word<hr>';
        }
        public function mostraTchau(){
            parent::mostraTchau();
            echo '<hr>';
            echo 'Outra Função';
        }
    }
    class Pai{
        public function mostraTchau(){
            echo 'Tchau Mundo';
        }
    }
   /* $pai = new Pai();
    $pai->mostraTchau();
    */
    $filha = new Filha();
    $filha->printHello();
    $filha->mostraTchau();
?>