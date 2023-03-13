<?php

class AdminBuscarReemplazarController extends ModuleAdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderList()
    {
        return $this->module->display($this->module->name, 'views/templates/admin/buscaryreemplazar.tpl');
    }

    public function postProcess()
    {
        if (Tools::isSubmit('submit')) {
            // Obtener la ruta de la carpeta de archivos desde el input file-path
            $folder_path = Tools::getValue('file-path');

            // Obtener los valores de los inputs del formulario
            $busqueda = Tools::getValue('buscar');
            $reemplazo = Tools::getValue('reemplazar');

            // Llamar a la función buscarReemplazarTexto()
            $this->buscarReemplazarTexto($folder_path, $busqueda, $reemplazo);
        }
    }

    public function buscarReemplazarTexto($folder_path, $busqueda, $reemplazo)
    {
        if (!is_dir($folder_path)) {
            return 'El directorio especificado no existe';
        }

        // Obtener todos los archivos de la carpeta
        $files = glob($folder_path . '/*');

        // Recorrer todos los archivos y buscar/reemplazar el texto
        $encontrado = false;
        $reemplazos_archivos = 0; // Inicializar el contador de reemplazos para archivos

        // Recorrer todos los archivos y buscar/reemplazar el texto
        foreach ($files as $file) {
            // Obtener el contenido del archivo
            $file_content = file_get_contents($file);

            // Realizar la sustitución del texto
            $nuevo_contenido = str_replace($busqueda, $reemplazo, $file_content);

            // Escribir el nuevo contenido en el archivo
            file_put_contents($file, $nuevo_contenido);

            // Establecer la variable de control en true si se encontró un archivo
            if (strpos($nuevo_contenido, $reemplazo) !== false) {
                $encontrado = true;
                $reemplazos_archivos++; // Aumentar el contador de reemplazos
            }
        }

        // Verificar si se encontraron archivos
        if ($encontrado) {
            // Mostrar mensaje de éxito
            $this->confirmations[] = $this->l('Texto reemplazado correctamente en') . ' ' . $reemplazos_archivos . ' ' . $this->l('archivos');
        } else {
            // Mostrar mensaje de error
            $this->errors[] = $this->l('No se encontraron archivos que coincidan con la búsqueda');
        }

        // Código para depurar
        $debug_info = array(
            'folder_path' => $folder_path,
            'busqueda' => $busqueda,
            'reemplazo' => $reemplazo,
            'reemplazos_archivos' => $reemplazos_archivos,
            'nuevo_contenido' => $nuevo_contenido
        );
        $this->context->smarty->assign('debug_info', $debug_info);

        return true;
    }
}
