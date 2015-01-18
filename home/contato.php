<?php

include_once '../configs/SmartyPortal.php';
include_once './DAO/MateriaDAO.class.php';
include_once '../libs/Email.php';

$sm = new SmartyPortal();

$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias", $materiaDAO->getAll());

$sm->assign("titulo", "Contato");
$sm->assign("pg_atual", "Contato");
$sm->assign("test", "");
$sm->assign("secret_key", "6LcooAATAAAAAMvBFRmhbZMraX8XDViQaecfk1rb");

if (isset($_POST['g-recaptcha-response'])) {
    $key = "6LcooAATAAAAAMvBFRmhbZMraX8XDViQaecfk1rb";
    $url = sprintf("https://www.google.com/recaptcha/api/siteverify?secret=%s&response=%s", $key, $_POST['g-recaptcha-response']);

    $dados = json_decode(file_get_contents($url));

    if ($dados->success == true) {
        if(isset($_POST['name']) && isset($_POST['email'])){
            $email = new Email('contato@altamir.com.br', $_POST['email'], $_POST['name'], $_POST['message'], "Contato Site", $_POST['phone']);
            $email->enviaEmail();
        }
           
        $sm->assign("test", $_POST['name'].", Sua mensagem foi encaminhada.");
    } else {
         $sm->assign("test","Segundo o Google parentemente você é um robô, que pena!");        
    }
}
//$sm->debugar();
$sm->assign("img_cons", "http://www.venuebit.com/images/Page-Under-Construction.png");
$sm->display("contato.tpl");
