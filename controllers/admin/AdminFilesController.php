<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class AdminFilesController extends ModuleAdminController
{
    protected $pagination_default_limit = 10; // cantidad de elementos a mostrar por defecto

    public function __construct()
    {
        parent::__construct();
    }

    public function renderList()
    {
        $path = Tools::getValue('path') ? Tools::getValue('path') : _PS_ROOT_DIR_;

        $link = Context::getContext()->link;
        $pagination = $this->getPagination($path);

        $directories = array();
        $files_list = array();

        $files = scandir($path);
        $files = array_filter($files, function ($file) use ($path) {
            return $file !== '.' && $file !== '..' && is_readable($path . '/' . $file);
        });
        $files = array_slice($files, $pagination['offset'], $pagination['limit']);

        foreach ($files as $file) {
            if (is_dir($path . '/' . $file)) {
                $directories[] = $file;
            } else {
                $files_list[] = $file;
            }
        }
        
        /*
        $this->context->smarty->assign(array(
            'path' => $path,
            'directories' => $directories,
            'files' => $files_list,
            'pagination' => $pagination,
            'link' => $link,
        ));
        */
        return $this->module->display($this->module->name, 'views/templates/admin/files.tpl', array(
            'path' => $path,
            'directories' => $directories,
            'files' => $files_list,
            'pagination' => $pagination,
            'link' => $link,
        ));        
    }

    protected function getPagination($path)
    {
        $page = Tools::getValue('page') ? (int)Tools::getValue('page') : 1;
        $limit = Tools::getValue('limit') ? (int)Tools::getValue('limit') : $this->pagination_default_limit;

        $files = scandir($path);
        $files = array_filter($files, function ($file) use ($path) {
            return $file !== '.' && $file !== '..' && is_readable($path . '/' . $file);
        });

        $total_files = count($files);
        $total_pages = ceil($total_files / $limit);

        if ($page > $total_pages) {
            $page = $total_pages;
        }

        $offset = ($page - 1) * $limit;

        return array(
            'page' => $page,
            'limit' => $limit,
            'offset' => $offset,
            'total_files' => $total_files,
            'total_pages' => $total_pages,
        );
    }
}
