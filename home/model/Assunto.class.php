<?php

class Assunto {

    private $id;
    private $nome;

    function __construct($nome) {
        $this->setNome($nome);
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

}
