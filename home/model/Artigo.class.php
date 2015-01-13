<?php

/**
 * Description of Artigo
 *
 * @author Altamir
 */
class Artigo {
    private $id;
    private $titulo;
    private $autor;
    private $data;
    private $assunto;
    private $tag;
    private $secoes;
    
    function __construct() {
        
    }
    function getTitulo() {
        return $this->titulo;
    }
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

        function getAutor() {
        return $this->autor;
    }

    function getData() {
        return $this->data;
    }

    function getAssunto() {
        return $this->assunto;
    }

    function getTag() {
        return $this->tag;
    }

    function getSecoes() {
        return $this->secoes;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setData($data) {
        $this->data = date('Y/m/d', strtotime($data));
    }

    function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    function setTag($tag) {
        $this->tag = $tag;
    }

    function setSecoes($secoes) {
        $this->secoes = $secoes;
    }


}
