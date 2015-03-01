<?php

/**
 * Classe Empregos
 *
 * @author Altamir
 */
class Empregos {
    private $empresa;
    private $cargo;
    private $discricao;
    private $periodo;
    
    function __construct($empresa, $cargo, $discricao, $periodo) {
        $this->empresa = $empresa;
        $this->cargo = $cargo;
        $this->discricao = $discricao;
        $this->periodo = $periodo;
    }
    
    function getEmpresa() {
        return $this->empresa;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getDiscricao() {
        return $this->discricao;
    }

    function getPeriodo() {
        return $this->periodo;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setDiscricao($discricao) {
        $this->discricao = $discricao;
    }

    function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }
}
