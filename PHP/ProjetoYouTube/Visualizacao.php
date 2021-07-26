<?php
require "Video.php";
require "Gafanhoto.php";
class Visualizacao{
    private $espectador;
    private $filme;

    #Métodos especiais
    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
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
}
?>