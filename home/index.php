<?php
include_once '../configs/SmartyPortal.php';

$sm = new SmartyPortal();

$sm->assign("titulo", "Hello World!");
$sm->assign("teste", "Testando se smarty foi configurado corretamene!");

$sm->display("teste.tpl");