<?php
include_once '../BD/BD.php';

class AssuntoDAO {
    
    private $conexao;
    private $assunto;
    
    function __construct() {
        $bd = new BD();
        $this->conexao = $bd->newCon();
    }
    
    function getAll() {
       $sql = "SELECT * FROM assunto";
       $resul = $this->conexao->query($sql);
       return $resul;
    }

}
