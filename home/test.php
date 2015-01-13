<?php
include_once '../configs/SmartyPortal.php';
include './DAO/AssuntoDAO.class.php';

$sm = new SmartyPortal();

$sm->assign("titulo", "Teste Smarty!");
$sm->assign("teste", "Smarty configurado com sucesso!!!");
$sm->assign("pg_atual","Pagina teste PDO");

$assun = AssuntoDAO::getInstacia();



$assuntos = $assun->getAll();;

var_dump($assuntos);
//$sm->assign($assuntos);

$sm->display("teste.tpl");