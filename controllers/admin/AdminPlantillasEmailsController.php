<?php

require_once __DIR__ . '/AdminBuscarReemplazarController.php';

class AdminPlantillasEmailsController extends ModuleAdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderList()
    {
        return $this->module->display($this->module->name, 'views/templates/admin/emails.tpl');
    }

    public function postProcess()
    {
        if (Tools::isSubmit('submit')) {
            // Obtener la ruta de la carpeta de archivos desde el input file-path
            $folder_path = Tools::getValue('file-path');

            // Obtener los valores de los inputs del formulario
            $busqueda = Tools::getValue('buscar');
            $reemplazo = Tools::getValue('reemplazar');

            // Crear una instancia de la clase AdminBuscarController
            $adminBuscarReemplazarController = new AdminBuscarReemplazarController();

            // Llamar a la función buscarReemplazarTexto()
            $adminBuscarReemplazarController->buscarReemplazarTexto($folder_path, $busqueda, $reemplazo);
        } else if (Tools::isSubmit('submitUrl1')) {
            // Obtener la ruta de la carpeta de archivos desde el input file-path
            $emails_path = Tools::getValue('emails-path');

            echo ($emails_path);
            // Obtener los valores de los inputs del formulario
            $busqueda_url = Tools::getValue('img-url1');
            $reemplazo_url = Tools::getValue('img-url1-remplazar');

            // Crear una instancia de la clase AdminBuscarController
            $adminBuscarReemplazarController = new AdminBuscarReemplazarController();

            // Llamar a la función buscarReemplazarTexto()
            $adminBuscarReemplazarController->buscarReemplazarTexto($emails_path, $busqueda_url, $reemplazo_url);

            // Código para depurar
            $debug_info = array(
                'emails_path' => $emails_path,
                'busqueda_url' => $busqueda_url,
                'reemplazo_url' => $reemplazo_url,
            );
            $this->context->smarty->assign('debug_info', $debug_info);
        }
    }
}
