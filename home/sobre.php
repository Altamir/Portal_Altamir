<?php
include_once '../configs/SmartyPortal.php';
include_once './DAO/MateriaDAO.class.php';
include_once './DAO/SecaoDAO.class.php';
$sm = new SmartyPortal();

$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias",$materiaDAO->getAll());

$smSecao = SecaoDAO::getInstacia();

$sm->assign("secoes", $smSecao->getBy(1));
$sm->assign("titulo", "Sobre o Projeto");
$sm->assign("pg_atual", "Sobre");
$sm->assign("img_cons", "http://www.venuebit.com/images/Page-Under-Construction.png");
$sm->display("sobre.tpl");