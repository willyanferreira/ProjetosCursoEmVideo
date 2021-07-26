<?php
class Video implements AcoesVideo{
    #Atríbutos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    #Métodos especiais
    public function __construct($titulo){
        $this->setTitulo($titulo);
        $this->setAva(1);
        $this->setViews(0);
        $this->setCurt(0);
        $this->setRepro(false);
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setAva($ava){
        $this->avaliacao = $ava;
    }
    public function getAva(){
        return $this->avaliacao;
    }
    public function setViews($views){
        $this->views = $views;
    }
    public function getViews(){
        return $this->views;
    }
    public function setCurt($curt){
        $this->curtidas = $curt;
    }
    public function getCurt(){
        return $this->curtidas;
    }
    public function setRepro($repro){
        $this->reproduzindo = $repro;
    }
    public function getRepro(){
        return $this->reproduzindo;
    }

    #Métodos simples
    public function play();
    public function pause();
    public function like();
}
?>