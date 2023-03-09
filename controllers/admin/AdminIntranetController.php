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

    public function postProcess()
    {
        // Ruta del archivo a modificar
        #$file_path = '/home/vestatex/pruebas.piscihogar.com/prueba/ejemplo.txt';
        #logDebugMessage("La ruta del archivo es: " + $file_path);
        if (Tools::isSubmit('submit')) {
            // Obtener la ruta del archivo desde el input file-path
            $file_path = Tools::getValue('file-path');
            
            // Obtener los valores de los inputs del formulario
            $busqueda = Tools::getValue('buscar');
            $reemplazo = Tools::getValue('reemplazar');

            // Código para buscar y reemplazar el texto en el archivo X
            // Obtener el contenido del archivo
            $file_content = file_get_contents($file_path);

            // Realizar la sustitución del texto
            $nuevo_contenido = str_replace($busqueda, $reemplazo, $file_content);

            // Escribir el nuevo contenido en el archivo
            file_put_contents($file_path, $nuevo_contenido);

            // Código para depurar
            $debug_info = array(
                'file_path' => $file_path,
                'busqueda' => $busqueda,
                'reemplazo' => $reemplazo,
                'nuevo_contenido' => $nuevo_contenido
            );
            $this->context->smarty->assign('debug_info', $debug_info);


            // Mostrar mensaje de éxito o error
            $this->confirmations[] = $this->l('Texto reemplazado correctamente');
        }
    }

    public function displayForm()
    {
        // Obtener la ruta de la carpeta de archivos
        $folder_path = _PS_MODULE_DIR_ . 'mi_menu/';

        // Obtener los archivos de la carpeta y sus rutas
        $files = scandir($folder_path);
        $file_list = array();
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                $file_list[] = array(
                    'name' => $file,
                    'path' => $folder_path . $file
                );
            }
        }

        // Asignar los datos a la vista
        $this->context->smarty->assign('files', $file_list);

        return $this->display(__FILE__, 'views/templates/admin/intranet.tpl');
    }
}
