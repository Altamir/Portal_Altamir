<?php

/**
 * Classe Curso
 *
 * @author Altamir
 */
class Curso {
    private $titulo;
    private $descricao;
    private $entidade;
    private $ano;
    
    function __construct($titulo, $descricao, $entidade, $ano) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->entidade = $entidade;
        $this->ano = $ano;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getEntidade() {
        return $this->entidade;
    }

    function getAno() {
        return $this->ano;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setEntidade($entidade) {
        $this->entidade = $entidade;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }



    
}
