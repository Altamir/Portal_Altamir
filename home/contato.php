<?php

include_once '../configs/SmartyPortal.php';
include_once './DAO/MateriaDAO.class.php';

$sm = new SmartyPortal();

$materiaDAO = MateriaDAO::getInstacia();
$sm->assign("smMaterias", $materiaDAO->getAll());

$sm->assign("titulo", "Contato");
$sm->assign("pg_atual", "Contato");
$sm->assign("test", "Pagina com formulario, não esta Funcional.");
$sm->assign("secret_key", "6LcooAATAAAAAMvBFRmhbZMraX8XDViQaecfk1rb");

if (isset($_POST['g-recaptcha-response'])) {
    $key = "6LcooAATAAAAAMvBFRmhbZMraX8XDViQaecfk1rb";
    $url = sprintf("https://www.google.com/recaptcha/api/siteverify?secret=%s&response=%s", $key, $_POST['g-recaptcha-response']);

    $dados = json_decode(file_get_contents($url));

    if ($dados->success == true) {
        if(isset($_POST['name']))
            $name = $_POST['name'];
        $sm->assign("test", $name.", Infelizmente o sistema de Contatos não esta em Funcionameto.");
    } else {
         $sm->assign("test","Segundo o Google parentemente você é um robô, que pena!");        
    }
}
//$sm->debugar();
$sm->assign("img_cons", "http://www.venuebit.com/images/Page-Under-Construction.png");
$sm->display("contato.tpl");
