<?php
include_once '../configs/SmartyPortal.php';

$sm = new SmartyPortal();

$sm->assign("titulo", "Pagina em Construção!");
$sm->assign("pg_atual", "Home");
$sm->assign("teste", "Pagina em construção!" );
$sm->assign("img_cons", "http://www.venuebit.com/images/Page-Under-Construction.png");
//$sm->debugar();
$sm->display("teste.tpl");