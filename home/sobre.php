<?php
include_once '../configs/SmartyPortal.php';
include_once './DAO/MateriaDAO.class.php';
include_once './DAO/UserDAO.class.php';
$sm = new SmartyPortal();

$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias",$materiaDAO->getAll());

$userDAO = UserDAO::getInstacia();
$sm->assign("user",$userDAO->getBy(1));

$scriptGoogleMap = '<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>';


$sm->assign("test", "Sendo testado Em Producao");
$sm->assign("titulo", "Quem sou.");
$sm->assign("pg_atual", "Sobre");
$sm->assign("marcacaoGoogle",$scriptGoogleMap);

$sm->display("sobre_eu.tpl");