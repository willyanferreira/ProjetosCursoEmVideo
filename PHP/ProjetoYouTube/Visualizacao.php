<?php
require_once "Video.php";
require_once "Gafanhoto.php";
class Visualizacao{
    private $espectador;
    private $filme;

    #Métodos especiais
    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssis($this->espectador->getTotAssis() + 1);
    }
    public function setEspectador($espec){
        $this->espectador = $espec;
    }
    public function getEspectador(){
        return $this->espectador;
    }
    public function setFilme($filme){
        $this->filme = $filme;
    }
    public function getFilme(){
        return $this->filme;
    }

    #Métodos simples
    public function avaliar(){
        $this->filme->setAva(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAva($nota);
    }
    public function avaliarPor($por){
        $nova = 0;
        if($por <= 20){
            $nova = 3;
        }else if($por <= 50){
            $nova = 5;
        }else if($por <= 80){
            $nova = 8;
        }else{
            $nova = 10;
        }
        $this->filme->setAva($nova);
    }
}
?>