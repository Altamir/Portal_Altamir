<?php
include_once 'smarty/libs/SmartyBC.class.php';

$sm = new SmartyBC();
$sm->setConfigDir("smarty/configs");
$sm->setCompileDir("smarty/templates_c");
$sm->setTemplateDir("smarty/templates");

$sm->assign("titulo", "Hello World!");
$sm->assign("teste", "Testando se smarty foi configurado corretamene!");

$sm->display("teste.tpl");