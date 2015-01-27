<?php

/**
 * Classe responsavel por montar email e envia-lo
 * 
 *
 * @author Altamir
 */
abstract class Email {

    private $destino;
    private $remetente;
    private $nome;
    private $mensagem;
    private $assunto;

    function __construct($destino, $remetente, $nome, $mensagem, $assunto) {
        $this->destino = $destino;
        $this->remetente = $remetente;
        $this->nome = $nome;
        $this->mensagem = $mensagem;
        $this->assunto = $assunto;
    }
    
    protected abstract function preparaMesagem();

    public function enviaEmail() {
        $this->preparaMesagem();
        return mail($this->getDestino(), $this->getAssunto(), $this->getMensagem(), $this->preparaHeaders());
    }

    protected function preparaHeaders() {
        $headers = "Content-Type:text/html; charset=UTF-8\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "From: altamir.com.br<" . $this->getRemetente() . ">\n";
        $headers .= "X-Sender: <" . $this->getRemetente() . ">\n";
        $headers .= "X-Mailer: PHP v" . phpversion() . "\n";
        $headers .= "X-IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
        $headers .= "Return-Path: <" . $this->getRemetente() . ">\n";
        
        return $headers;
    }

    function getDestino() {
        return $this->destino;
    }

    function getRemetente() {
        return $this->remetente;
    }

    function getNome() {
        return $this->nome;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function setDestino($destino) {
        $this->destino = $destino;
    }

    function setRemetente($remetente) {
        $this->remetente = $remetente;
    }
    
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    function getAssunto() {
        return $this->assunto;
    }

    function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

}
