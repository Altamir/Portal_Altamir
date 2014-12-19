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
        
        $this->setTemplateDir('../templates/');
        $this->setCompileDir('../templates_c/');
        $this->setCacheDir('../cache/');
        $this->setConfigDir('../configs/');
    }
    
    public function debugar() {
        $this->debugging = TRUE;
    }
}
