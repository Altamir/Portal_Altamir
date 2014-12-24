<?php
include_once '../configs/SmartyPortal.php';

$sm = new SmartyPortal();

$sm->assign("titulo", "Teste Smarty!");
$sm->assign("teste", "Smarty configurado com sucesso!!!");
//$sm->debugar();
$sm->display("teste.tpl");