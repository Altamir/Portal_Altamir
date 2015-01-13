<?php
include_once 'BD.php';
include_once 'model/Assunto.class.php';

class AssuntoDAO {
    
   
    private static $instancia;
    
    private function __construct() {        
    }
    
    public static function getInstacia() {
        if (!isset(self::$instancia)) {
            self::$instancia = new AssuntoDAO();
        }
        return self::$instancia;
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
    
    public function getByID($id) {
        $sql = "SELECT * FROM assunto WHERE id = :id";
        $obj = null;
        $st = BD::getInstacia()->prepare($sql);
        $st->bindParam(":id", $id);
        $st->execute();
        if( ($linha = $st->fetch()) !== FALSE){
            $obj = new Assunto($linha['nome']);
            $obj->setId($linha['id']);
        }
        return $obj;
    }

}
