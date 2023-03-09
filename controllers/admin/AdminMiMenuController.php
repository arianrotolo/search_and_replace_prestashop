<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class AdminMiMenuController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true; #ok
        $this->table = 'mi_menu';
        $this->className = 'Mi_Menu';
        $this->lang = false; #idioma predeterminado de la tienda
        #$this->addRowAction('');

        parent::__construct();
    }

    public function initContent() #ok
    {
        echo('HOLA DESDE ADMINMIMENU');
        /*$this->context->smarty->assign(array(
            'content' => $this->module->getContent(),
        ));*/

        #$this->setTemplate('module:mi_menu/views/templates/admin/menu.tpl');
        
        parent::initContent(); #ok
    }
}
