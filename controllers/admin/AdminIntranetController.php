<?php

class AdminIntranetController extends ModuleAdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderList()
    {
        return $this->module->display($this->module->name, 'views/templates/admin/intranet.tpl');
    }
}