<?php
class cache{
    public function readCache(){
        if(file_exists('cache')){
            $data = json_decode(file_get_contents('cache'));
            if($data->tempo < time()){
                echo 'criando novo cache';
                $data = json_encode(['tempo'=>time()+60,'conteudo'=>'<h2>Saite em Manutenção</h2>']);
                file_put_contents('cache',$data);
                $data = json_decode($data);
            }
        }else{
            echo 'criando Cache pela primeira vez';
            $data = json_encode(['tempo'=>time()+60,'conteudo'=>'<h2>Saite em Manutenção</h2>']);
            file_put_contents('cache',$data);
            $data = json_decode($data);
        }
        return $data;
    }
}
?>