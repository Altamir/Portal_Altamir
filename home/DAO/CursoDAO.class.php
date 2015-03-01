<?php

include_once 'BD.php';
include_once 'model/Curso.class.php';

/**
 * Classe CursoDAO
 *
 * @author Altamir
 */
class CursoDAO {

    private static $instancia;

    private function __construct() {
        
    }

    public static function getInstacia() {
        if (!isset(self::$instancia)) {
            self::$instancia = new CursoDAO();
        }
        return self::$instancia;
    }

    public function getAll() {
        $sql = "SELECT * FROM curso";
        $cursos = BD::getInstacia()->query($sql)->fetchAll();
        $colecao[] = array();
        foreach ($cursos as $linha) {
            $aux = new Curso($linha['titulo'], $linha['descricao'], $linha['entidade'], $linha['ano']);
            $aux->setId($linha['id']);
            $colecao[] = $aux;
        }
        return $colecao;
    }

    public function getById($id) {
        $sql = "SELECT * FROM curso WHERE id = :id";
        $obj = null;
        $st = BD::getInstacia()->prepare($sql);
        $st->bindParam(":id", $id);
        $st->execute();

        if (($linha = $st->fetch()) !== FALSE) {
            $obj = new Curso($linha['titulo'], $linha['descricao'], $linha['entidade'], $linha['ano']);
            $obj->setId($id);
        }
        return $obj;
    }

}
