<?php

require_once 'Email.php';

/**
 * Classe responsavel por montar email e envia-lo
 * 
 *
 * @author Altamir
 */
class EmailContato extends Email {

    private $telefone;

    function __construct($destino, $remetente, $nome, $mensagem, $assunto, $tel) {
        parent::__construct($destino, $remetente, $nome, $mensagem, $assunto);
        $this->setTelefone($tel);
    }   

    protected function preparaMesagem() {
        $msg = "Nome: " . $this->getNome();
        $msg .= "<br />Telefone: " . $this->getTelefone();
        $msg .= "<br />Email: " . $this->getRemetente();
        $msg .= "<br />Assunto:<br />";
        $msg .= $this->getMensagem();
        $this->setMensagem($msg);
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

}
