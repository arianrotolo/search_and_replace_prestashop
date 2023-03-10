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

        // Recuperamos el nombre del directorio clickeado de la variable GET
        $directory_clicked = Tools::getValue('directory_clicked');

        // Si el directorio ha sido clickeado, actualizamos el path
        if ($directory_clicked) {
            $path .= '/' . $directory_clicked;
        }

        $link = Context::getContext()->link;

        $directories = array();
        $files_list = array();

        $files = scandir($path);
        $files = array_filter($files, function ($file) use ($path) {
            return $file !== '.' && $file !== '..' && is_readable($path . '/' . $file);
        });

        foreach ($files as $file) {
            if (is_dir($path . '/' . $file)) {
                $directories[] = $file;
            } else {
                $files_list[] = $file;
            }
        }

        // como si exporta las variables para que puedan ser leidas en el .tpl
        $this->context->smarty->assign(array(
            'path' => $path,
            'directories' => $directories,
            'files' => $files_list,
            'link' => $link,
        ));

        return $this->module->display($this->module->name, 'views/templates/admin/files.tpl');
    }
}
