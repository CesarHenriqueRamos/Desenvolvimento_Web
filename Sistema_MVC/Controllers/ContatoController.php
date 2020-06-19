<?php

namespace Controllers;

class ContatoController extends Controller{
   
    public function executar(){
        if(isset($_POST['acao'])){
            \Models\ContatoModelo::enviarFormulario();
            echo '<script>location.href="'.INCLUDE_PATH.'contato/sucesso"<qscript>';
            die();
        }
        \Router::rota('contato/sucesso',function(){
            $this->view = new \Views\MainView('contato-sucesso');
            $this->view->render(array('titulo'=>'Contato'));
        });
        \Router::rota('contato',function(){
            $this->view = new \Views\MainView('contato');
            $this->view->render(array('titulo'=>'Contato'));
        });
    }
}
?>