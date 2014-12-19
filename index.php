<?php
include_once 'smarty/libs/Smarty.class.php';
$sm = new SmartyBC();
$sm->addConfigDir("smarty/configs/");
$sm->addTemplateDir("smarty/templates/");

$smarty->assign("titulo", "Hello World!");
$smarty->assign("corpo", "Testando se smarty foi configurado corretamene!");

$smarty->display("teste.tpl");