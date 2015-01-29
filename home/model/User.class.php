<?php

/**
 * Classe User
 *
 * @author Altamir
 */
class User {
    private $id;
    private $nome;
    private $sobreNome;
    private $email;
    private $foto;
    private $dataNasc;
    private $dataCadastro;
    private $reputacao;
    
    function __construct($nome, $sobreNome, $email, $foto, $dataNasc, $dataCadastro, $reputacao) {
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
        $this->email = $email;
        $this->foto = $foto;
        $this->dataNasc = $dataNasc;
        $this->dataCadastro = $dataCadastro;
        $this->reputacao = $reputacao;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobreNome() {
        return $this->sobreNome;
    }

    function getEmail() {
        return $this->email;
    }

    function getFoto() {
        return $this->foto;
    }

    function getDataNasc() {
        return $this->dataNasc;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getReputacao() {
        return $this->reputacao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobreNome($sobreNome) {
        $this->sobreNome = $sobreNome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setReputacao($reputacao) {
        $this->reputacao = $reputacao;
    }



}
