<?php

require_once ('config_var_bd.php');

class BD {

    function newCon() {
        return new mysqli($_ENDERECO_BANCO, $_USER_BANCO, $_PASS_BANCO, $_NOME_BANCO);
    }

}
