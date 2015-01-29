<?php

/**
 * Description of secao
 *
 * @author Altamir
 */
class Secao {
    private $posicao;
    private $pai;
    private $corpo;
    private $tag;
    
    public function __construct($posicao, $pai, $corpo, $tag) {
        $this->posicao = $posicao;
        $this->pai = $pai;
        $this->corpo = $corpo;
        $this->tag = $tag;
    }
    
    function getPosicao() {
        return $this->posicao;
    }

    function getPai() {
        return $this->pai;
    }

    function getCorpo() {
        return $this->corpo;
    }

    function getTag() {
        return $this->tag;
    }

    function setPosicao($posicao) {
        $this->posicao = $posicao;
    }

    function setPai($pai) {
        $this->pai = $pai;
    }

    function setCorpo($corpo) {
        $this->corpo = $corpo;
    }

    function setTag($tag) {
        $this->tag = $tag;
    }



}