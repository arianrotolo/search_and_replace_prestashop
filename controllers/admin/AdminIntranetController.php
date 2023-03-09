<?php

class AdminIntranetController extends ModuleAdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderList()
    {
        echo 'Hola Mundo 1';
        $this->context->smarty->assign(array(
            'mensaje' => 'Hola mundo'
        ));

        return $this->module->display($this->module->name, 'views/templates/admin/intranet.tpl');
    }

    public function renderForm()
    {
        echo 'Hola Mundo 2';
    }
}