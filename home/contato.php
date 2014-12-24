<?php

include_once '../configs/SmartyPortal.php';

$sm = new SmartyPortal();

$sm->assign("titulo", "Contato");
$sm->assign("teste", "Pagina com formulario para entrar em contato.");
//$sm->debugar();
$sm->display("contato.tpl");
