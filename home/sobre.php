<?php
include_once '../configs/SmartyPortal.php';
include_once './DAO/MateriaDAO.class.php';
include_once './DAO/SecaoDAO.class.php';
$sm = new SmartyPortal();

$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias",$materiaDAO->getAll());

$smSecao = SecaoDAO::getInstacia();

$sm->assign("marcacaoGoogle",'<!-- Marcação JSON-LD gerada pelo Assistente de marcação para dados estruturados do Google. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Article",
  "name" : "Desenvolvimento Web",
  "author" : {
    "@type" : "Person",
    "name" : "Altamir Benkenstein"
  },
  "image" : "http://altamir.com.br/home/imgs/altamir.jpg",
  "articleSection" : "Projeto criado com o intuito de praticar conhecimentos adquirido",
  "articleBody" : "utilizado no Back-end PHP e MySql. Será utilizado Smarty Template na camada de apresentação. No Front-End será utilizado Bootstrap para estilização. Após o site estiver com algumas funcionalidades prontas será desenvolvido uma versão mobile utilizando jQuery Mobile framework.",
  "url" : "https://github.com/Altamir/Portal_Altamir"
}
</script>');

$sm->assign("secoes", $smSecao->getBy(1));
$sm->assign("titulo", "Sobre o Projeto");
$sm->assign("pg_atual", "Sobre");
$sm->assign("img_cons", "http://www.venuebit.com/images/Page-Under-Construction.png");
$sm->display("sobre.tpl");