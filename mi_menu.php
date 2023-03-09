<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Mi_Menu extends Module
{
    public $tabs = array(
        array(
            'name' => 'Mi Menu', # nombre del menu en barra lateral
            'class_name' => 'AdminMiMenu', # $this->class_name es propiedad de la clase Tab, se utiliza para definir la clase que controlara el comportamiento de la pestaña del menú. (AdminMiMenuController)
            'visible' => true,
            'parent_class_name' => 'AdminParentModulesSf',
        ),
        array(
            'name' => 'Intranet', # nombre del menu en barra lateral
            'class_name' => 'AdminIntranet', # $this->class_name es propiedad de la clase Tab, se utiliza para definir la clase que controlara el comportamiento de la pestaña del menú. (IntranetController)
            'visible' => true,
            'parent_class_name' => 'AdminParentModulesSf',
        ),
    );

    public function __construct()
    {
        $this->name = 'mi_menu';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Arian';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = 'Mi Menu';
        $this->description = 'Agrega un menu personalizado al panel de administración';
        $this->confirmUninstall = '¿Estás seguro de que deseas desinstalar el módulo?';
    }

    public function install()
    {
        if (
            parent::install() &&
            $this->registerHook('displayBackOfficeHeader')
        ) {
            return true;
        }

        return false;
    }

    public function hookDisplayBackOfficeHeader()
    {
        $this->context->controller->addCSS($this->_path . 'views/css/menu.css');
        $this->context->controller->addJS($this->_path . 'views/js/menu.js');
    }

    public function getContent()
    {
        $html = '<h2>' . $this->displayName . '</h2>';
        $html .= '<p>Este módulo agrega un menu personalizado al panel de administración.</p>';

        // Agregar enlace al formulario de Intranet
        $html .= '<a href="' . $this->context->link->getAdminLink('AdminIntranet') . '">' . $this->l('Ir al formulario de Intranet') . '</a>';

        return $html;
    }
}
