<?php

include_once 'config_var_bd.php';

class BD {

    public $instancia;

    private function __construct() {        
    }

    public static function getInstacia() {
        $dsn = "mysql:host=".Confi_Var_BD::_ENDERECO_BANCO.";dbname=".Confi_Var_BD::_NOME_BANCO;        
        if(!isset($instancia)){
            $instancia = new PDO($dsn,  Confi_Var_BD::_USER_BANCO,  Confi_Var_BD::_PASS_BANCO );
        }        
        return $instancia;
    }

}
