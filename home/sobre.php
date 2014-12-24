<?php
include_once '../configs/SmartyPortal.php';

$sm = new SmartyPortal();

$sm->assign("titulo", "Sobre");
$sm->assign("teste", "Pagina que contera informações sobre o projeto e o Autor");

$sm->display("sobre.tpl");