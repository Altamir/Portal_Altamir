<?php
include_once '../configs/SmartyPortal.php';
include_once './DAO/MateriaDAO.class.php';
include_once './DAO/SecaoDAO.class.php';

$sm = new SmartyPortal();


$sm->assign("titulo", "Pagina em Construção!");
$sm->assign("pg_atual", "Home");
$sm->assign("teste", "Pagina em construção!" );
$sm->assign("img_cons", "http://www.venuebit.com/images/Page-Under-Construction.png");

$smSecao = SecaoDAO::getInstacia();
$sm->assign("secoes", $smSecao->getBy(1));

$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias",$materiaDAO->getAll());

//$sm->debugar();
$sm->display("index.tpl");