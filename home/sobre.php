<?php
include_once '../configs/SmartyPortal.php';

$sm = new SmartyPortal();

$sm->assign("titulo", "Sobre");
$sm->assign("teste", "aasdasdasdasd");
$sm->assign("pg_atual", "Sobre");
$sm->assign("img_cons", "http://www.venuebit.com/images/Page-Under-Construction.png");
$sm->display("sobre.tpl");