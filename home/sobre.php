<?php
include_once '../configs/SmartyPortal.php';
include_once './DAO/MateriaDAO.class.php';
$sm = new SmartyPortal();

$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias",$materiaDAO->getAll());

$sm->assign("titulo", "Sobre");
$sm->assign("p1", "Projeto criado com o intuito de praticar conhecimentos"
        . " adquirido nas aulas de Desenvolvimento Web e em curso de FRONT-END."
        . " Inicialmente o portal conterá material produzido nas disciplinas do"
        . " curso de Análise de Sistemas, dividido por disciplinas.");
$sm->assign("p2","Na construção do site será utilizado no Back-end PHP e MySql."
        . " Será utilizado Smarty Template na camada de apresentação."
        . " No Front-End será utilizado Bootstrap para estilização. "
        . "Após o site estiver com algumas funcionalidades prontas será "
        . "desenvolvido uma versão mobile utilizando jQuery Mobile framework. ");
$sm->assign("p3", "Assim que surgirem mais informações sobre o desenvolvimento "
        . "serão postadas no site. O código está disponível no meu gitHub. ");
$sm->assign("pg_atual", "Sobre");
$sm->assign("img_cons", "http://www.venuebit.com/images/Page-Under-Construction.png");
$sm->display("sobre.tpl");