<?php
include_once 'BD.php';
include_once 'model/Assunto.class.php';

class AssuntoDAO {
    
   
    private $assunto;
    
    function __construct() {
        
    }
    
    function getAll() {
       $sql = "SELECT * FROM assunto";
       $assuntos = BD::getInstacia()->query($sql)->fetchAll();
       $colecao[] = array();
       foreach ($assuntos as $assunto) {
           $aux = new Assunto($assunto['nome']);
           $aux->setId($assunto['id']);
           $colecao[] = $aux;
       }       
       return $colecao;
    }

}
