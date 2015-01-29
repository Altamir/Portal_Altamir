<?php
include_once '../configs/SmartyPortal.php';
include_once './DAO/MateriaDAO.class.php';
include_once './DAO/UserDAO.class.php';
$sm = new SmartyPortal();

$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias",$materiaDAO->getAll());

$userDAO = UserDAO::getInstacia();
$sm->assign("user",$userDAO->getBy(1));

$sm->assign("test", "Sendo testado Em Producao");
$sm->assign("titulo", "Quem sou.");
$sm->assign("pg_atual", "Sobre");

$sm->display("sobre_eu.tpl");