<?php
include_once '../configs/SmartyPortal.php';

$sm = new SmartyPortal();

$sm->assign("titulo", "Teste Smarty!");
$sm->assign("teste", "Testando se smarty foi configurado corretamene!");
$sm->debugar();
$sm->display("teste.tpl");