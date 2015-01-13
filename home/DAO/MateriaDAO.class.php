<?php
include_once 'BD.php';
include_once 'model/Materia.class.php';

/**
 * Description of MateriaDAO
 *
 * @author Altamir
 */
class MateriaDAO {
    private static $instancia;
    
    private function __construct() {
    }

    public static function getInstacia() {
        if (!isset(self::$instancia)) {
            self::$instancia = new MateriaDAO();
        }
        return self::$instancia;
    }
    
    public function getAll() {
        $sql = "SELECT * FROM materia";
       $materias = BD::getInstacia()->query($sql)->fetchAll();
       $colecao[] = array();
       foreach ($materias as $materia) {
           $aux = new Materia($materia['nome'], $materia['descricao'], $materia['ende']);
           $aux->setId($materia['id']);
           $colecao[] = $aux;
       }       
       return $colecao;
    }
}
