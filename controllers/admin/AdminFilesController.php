<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class AdminFilesController extends ModuleAdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderList()
    {
        $path = Tools::getValue('path') ? Tools::getValue('path') : _PS_ROOT_DIR_;
        $files = scandir($path);

        $directories = array();
        $files_list = array();

        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            if (is_dir($path . '/' . $file)) {
                $directories[] = $file;
            } else {
                $files_list[] = $file;
            }
        }

        return $this->module->display($this->module->name, 'views/templates/admin/files.tpl', array(
            'path' => $path,
            'directories' => $directories,
            'files' => $files_list
        ));
    }
}