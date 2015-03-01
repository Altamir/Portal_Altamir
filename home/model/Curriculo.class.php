<?php

include_once './User.class.php';

/**
 * Classe Curriculo
 *
 * @author Altamir
 */
class Curriculo {
    private $user;
    private $telefone;
    private $CoordenadaEndereço;
    private $endereco;
    private $formacao;
    private $cursos;
    private $experencia;
    
    function __construct($user) {
        $this->experencia = array();
        $this->cursos = array();
        if($user instanceof User ){
            $this->user = $user;
        }        
    }
    
    public function getAllExperencia() {
        return $this->experencia;
    }
    
    public function addExperencia($emprego) {
        $this->experencia[] = $emprego;
    }
    
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    
    public function getEndereco() {
        return $this->endereco;
    }
    
    public function setCoordenadas($coordenada) {
        $this->CoordenadaEndereço = $coordenada;
    }
    
    public function getCoordenadas() {
        return $this->CoordenadaEndereço;
    }
    
    public function getNome() {
        return $this->user->getNome();
    }
    
    public function getSobrenome() {
        return $this->user->getSobreNome();
    }
    
    public function getNomeCompleto() {
        return $this->getNome()." ".$this->getSobrenome();
    }
    
    public function getEmail() {
        return $this->user->getEmail();
    }    
    
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    
    public function getTelefone() {
        return $this->telefone;
    }    
    
    public function addCurso($curso) {
        $this->cursos[] = $curso;
    }
    
    public function getAllCursos() {
        return $this->cursos;
    }    
}
