<?php

require_once '../libs/SmartyBC.class.php';

/**
 * Description of SmartyPortal
 *
 * @author Altamir
 */
class SmartyPortal extends SmartyBC {

    function __construct() {
        parent::__construct();
        $this->setConfiguracoes();
        $this->assign("test", '');
        //$this->carregaMarcacaoGoogle();
    }

    public function debugar() {
        $this->debugging = TRUE;
    }

    private function setConfiguracoes() {
        $this->setTemplateDir('../templates/');
        $this->setCompileDir('../templates_c/');
        $this->setCacheDir('../cache/');
        $this->setConfigDir('../configs/');
    }

    private function carregaMarcacaoGoogle() {
        $this->assign("marcacaoGoogle", '<!-- Marcação JSON-LD gerada pelo Assistente de marcação para dados estruturados do Google. -->
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
    }

}
