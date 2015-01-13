<?php
include_once '../configs/SmartyPortal.php';
include './DAO/AssuntoDAO.class.php';
include_once './DAO/MateriaDAO.class.php';

$sm = new SmartyPortal();

$sm->assign("titulo", "Teste Smarty!");
$sm->assign("teste", "Smarty configurado com sucesso!!!");
$sm->assign("pg_atual","Pagina teste PDO");

$assun = AssuntoDAO::getInstacia();


$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias",$materiaDAO->getAll());


$assuntos = $assun->getAll();;

$sm->assign("assun" ,$assuntos);
$sm->assign("ass", $assun->getById(1) );

$sm->debugar();

$sm->display("teste.tpl");