<?php
abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $xp;

    #Métodos especiais
    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->xp = 0;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public funciton getNome(){
        return $this->nome;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public funciton getIdade(){
        return $this->idade;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public funciton getSexo(){
        return $this->sexo;
    }
    public function setXP($xp){
        $this->xp = $xp;
    }
    public funciton getXP(){
        return $this->xp;
    }
    #Métodos simples
    protected function ganharXP($xp){
        $this->xp += $xp;
    }
}
?>