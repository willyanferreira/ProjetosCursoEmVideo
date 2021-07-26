<?php
require "Pessoa.php";
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    #Métodos especiais
    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setTotAssis($view){
        $this->totAssistido = $view;
    }
    public function getTotAssis(){
        return $this->totAssistido;
    }

    #Métodos simples
    public function viuMais1(){
        $this->totAssistido ++;
    }
}
?>