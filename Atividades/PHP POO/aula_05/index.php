<?php
//metodos magicos
class Pessoa{
    private $nome;
    private $idade;
    //metodo construtor
    public function __construct($nome,$idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->Idade;
    }
}
$pessoa = new Pessoa('Cesar',25);
echo $pessoa->getNome();
?>