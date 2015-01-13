<?php

include_once '../configs/SmartyPortal.php';
include_once './DAO/MateriaDAO.class.php';

$sm = new SmartyPortal();

$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias",$materiaDAO->getAll());

$sm->assign("titulo", "Contato");
$sm->assign("pg_atual", "Contato");
$sm->assign("teste", "Pagina com formulario para entrar em contato.");
//$sm->debugar();
$sm->assign("img_cons", "http://www.venuebit.com/images/Page-Under-Construction.png");
$sm->display("contato.tpl");
