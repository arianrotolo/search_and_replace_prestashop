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
        $file_path = '/home/vestatex/pruebas.piscihogar.com/prueba/ejemplo.txt';
        #logDebugMessage("La ruta del archivo es: " + $file_path);
        if (Tools::isSubmit('submit')) {
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
}
