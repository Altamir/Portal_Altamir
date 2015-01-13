<?php
include_once 'BD.php';
include_once './model/Artigo.class..php';
include_once './SecaoDAO.class.php';

/**
 * Description of ArtigoDAO
 *
 * @author Altamir
 */
class ArtigoDAO {
   
    private static $instacia;
    
    private function __construct() {
    }
    
    public function getInstacia() {
        if(!isset(self::$instacia))
            self::$instacia = new ArtigoDAO ();
        return self::$instacia;
    }
    
     private function getSecoes($id) {
        $sec = SecaoDAO::getInstacia();
        return $sec->getBy($id);
    }
    
    public function getById($id) {
        $sql = "SELECT * FROM artigo WHERE id = :id";
        $obj = null;
        $st = BD::getInstacia()->prepare($sql);
        $st->bindParam(":id", $id);
        $st->execute();
        if( ($linha = $st->fetch()) !== FALSE){
            $obj = new Artigo();
            $obj->setId($linha['id']);
            $obj->setTitulo($linha['titulo']);
            $obj->setAutor($linha['autor']);
            $obj->setData($linha['data']);
            $obj->setAssunto($linha['assunto']);
            $obj->setSecoes($this->getSecoes($obj->getId()));
        }
        return $obj;        
    }
    
   

}
