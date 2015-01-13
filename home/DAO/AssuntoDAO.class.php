<?php
include_once '../BD/BD.php';

class AssuntoDAO {
    
   
    private $assunto;
    
    function __construct() {
        
    }
    
    function getAll() {
       $bd = new BD();
       $con = $bd->newCon();
       $sql = "SELECT * FROM assunto";
       $resul = $con->query($sql);
       return $resul;
    }

}
