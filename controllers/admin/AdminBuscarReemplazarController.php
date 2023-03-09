<?php

class AdminBuscarReemplazarController extends ModuleAdminController
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
        if (Tools::isSubmit('submit')) {
            // Obtener la ruta de la carpeta de archivos desde el input file-path
            $folder_path = Tools::getValue('file-path');

            // Obtener los valores de los inputs del formulario
            $busqueda = Tools::getValue('buscar');
            $reemplazo = Tools::getValue('reemplazar');

            // Obtener todos los archivos de la carpeta
            $files = glob($folder_path . '/*');

            // Recorrer todos los archivos y buscar/reemplazar el texto
            foreach ($files as $file) {
                // Obtener el contenido del archivo
                $file_content = file_get_contents($file);

                // Realizar la sustitución del texto
                $nuevo_contenido = str_replace($busqueda, $reemplazo, $file_content);

                // Escribir el nuevo contenido en el archivo
                file_put_contents($file, $nuevo_contenido);
            }

            // Código para depurar
            $debug_info = array(
                'folder_path' => $folder_path,
                'busqueda' => $busqueda,
                'reemplazo' => $reemplazo,
                'nuevo_contenido' => $nuevo_contenido
            );
            $this->context->smarty->assign('debug_info', $debug_info);


            // Mostrar mensaje de éxito o error
            $this->confirmations[] = $this->l('Texto reemplazado correctamente en todos los archivos');
        }
    }

    public function displayForm()
    {
        // Asignar la ruta del directorio de archivos a la vista
        $this->context->smarty->assign('folder_path', _PS_MODULE_DIR_ . 'intranet/');

        return $this->display(__FILE__, 'views/templates/admin/intranet.tpl');
    }
}
