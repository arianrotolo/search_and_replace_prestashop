<?php

class AdminMiMenu extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'mi_menu';
        $this->className = 'Mi_Menu';
        $this->lang = false;
        $this->addRowAction('');
        parent::__construct();
    }

    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign(array(
            'content' => $this->module->getContent(),
        ));

        $this->setTemplate('module:mi_menu/views/templates/admin/menu.tpl');
    }
}
