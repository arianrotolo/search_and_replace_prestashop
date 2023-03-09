<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class AdminMiMenuController extends ModuleAdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderList()
    {
        $this->context->smarty->assign(array(
            'mensaje' => 'Texto insertado con Smarty'
        ));

        return $this->module->display($this->module->name, 'views/templates/admin/menu.tpl');
    }
}
