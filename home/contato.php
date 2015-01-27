<?php

include_once '../configs/SmartyPortal.php';
include_once './DAO/MateriaDAO.class.php';
include_once '../libs/EmailContato.php';

$sm = new SmartyPortal();

$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias", $materiaDAO->getAll());

$sm->assign("titulo", "Contato");
$sm->assign("pg_atual", "Contato");
$sm->assign("error", "");

if (isset($_POST['g-recaptcha-response'])) {
    $key = "6LcooAATAAAAAMvBFRmhbZMraX8XDViQaecfk1rb";
    $url = sprintf("https://www.google.com/recaptcha/api/siteverify?secret=%s&response=%s", $key, $_POST['g-recaptcha-response']);

    $dados = json_decode(file_get_contents($url));

    if ($dados->success == true) {
        if(isset($_POST['name']) && isset($_POST['email'])){
            $email = new EmailContato('contato@altamir.com.br', $_POST['email'], $_POST['name'], $_POST['message'], "Contato Site", $_POST['phone']);
            $email->enviaEmail();
            $sm->assign("error", $_POST['name'].", Sua mensagem foi encaminhada.");
        }         
    } else {
         $sm->assign("error","Segundo o Google parentemente você é um robô, que pena!");        
    }
}
$sm->assign("img_cons", "http://www.venuebit.com/images/Page-Under-Construction.png");
$sm->display("contato.tpl");
