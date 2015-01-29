<?php
include_once 'BD.php';
include_once './model/Secao.class.php';

/**
 * Description of SecaoDAO
 *
 * @author Altamir
 */
class SecaoDAO {
    private static $instacia;
    
    private function __construct() {
    }

    public static function getInstacia() {
        if(!isset(self::$instacia))
            self::$instacia = new SecaoDAO ();
        return self::$instacia;            
    }
    
    public function getBy($pai) {
        $sql = "SELECT * FROM secao WHERE pai = :pai ORDER BY posicao asc";
        $obj = null;
        $cole = array();
        $st = BD::getInstacia()->prepare($sql);
        $st->bindParam(":pai", $pai);
        $st->execute();
        foreach ($st->fetchAll() as $linha) {
            $obj = new Secao($linha['posicao'],$linha['pai'], $linha['corpo'], $linha['tag']);
            $cole[] = $obj;
        }        
        return $cole;
    }
}
