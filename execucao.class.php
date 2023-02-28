<?php

require_once("pessoa.class.php");

class Teste{
    //Objeto com visibilidade privada
    private $pessoa;

    public function __construct(){

        //Objeto chamado pessoa que recebe a classe Pessoa()
        $pessoa = new Pessoa();

        //Passar um valor para o métoodo setNome
        $pessoa->setNome("Matheus");
        //Imprimir o valor do metodo getNome
        echo $pessoa->getNome();

    }
}new Teste();

?>