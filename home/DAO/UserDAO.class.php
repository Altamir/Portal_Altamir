<?php

include_once 'BD.php';
include_once './model/User.class.php';

/**
 * Classe UserDAO
 *
 * @author Altamir
 */
class UserDAO {

    private static $instacia;

    private function __construct() {
        
    }

    public static function getInstacia() {
        if (!isset(self::$instacia))
            self::$instacia = new UserDAO ();
        return self::$instacia;
    }
    
     public function getBy($id) {
        $sql = "SELECT * FROM user WHERE id = :id";
        $obj = null;
        $st = BD::getInstacia()->prepare($sql);
        $st->bindParam(":id", $id);
        $st->execute();
         if( ($linha = $st->fetch()) !== FALSE){
            $obj = new User($linha['nome'], $linha['sobreNome'], $linha['email'], $linha['foto'], $linha['dataNasc'], $linha['dataCadas'], $linha['reputacao']);
            $obj->setId($linha['id']);
        }
        
        return $obj;
    }

}
