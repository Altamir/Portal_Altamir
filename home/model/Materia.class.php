<?php

/**
 * Description of Materia
 *
 * @author Altamir
 */
class Materia {
    private $id;
    private $nome;
    private $discricao;
    private $url;
            
    function __construct($nome, $discricao, $url) {
        $this->nome = $nome;
        $this->discricao = $discricao;
        $this->url = $url;
    }
    function getUrl() {
        return $this->url;
    }

    function setUrl($url) {
        $this->url = $url;
    }

        function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDiscricao() {
        return $this->discricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDiscricao($discricao) {
        $this->discricao = $discricao;
    }



}
