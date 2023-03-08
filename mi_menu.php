<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Mi_Menu extends Module
{
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
            $this->registerHook('displayBackOfficeHeader') &&
            $this->installTab()
        ) {
            return true;
        }

        return false;
    }

    public function installTab()
    {
        $tab = new Tab();
        $tab->class_name = 'AdminMiMenu';
        $tab->module = $this->name;
        $tab->id_parent = (int)Tab::getIdFromClassName('AdminAdvancedParameters');
        $tab->active = 1;

        foreach (Language::getLanguages() as $lang) {
            $tab->name[$lang['id_lang']] = $this->l('Mi Menu');
        }

        return $tab->save();
    }

    public function uninstall()
    {
        if (
            parent::uninstall() &&
            $this->uninstallTab()
        ) {
            return true;
        }

        return false;
    }

    public function uninstallTab()
    {
        $id_tab = (int) Tab::getIdFromClassName('AdminMiMenu');
        $tab = new Tab($id_tab);
        $tab->delete();
        return true;
    }


    public function hookDisplayBackOfficeHeader()
    {
        echo("hola");
        if (Tools::getValue('module_name') == $this->name) {
            $this->context->controller->addCSS($this->_path . 'views/css/menu.css');
            $this->context->controller->addJS($this->_path . 'views/js/menu.js');
        }
    }

    public function getContent()
    {
        $html = '<h2>' . $this->displayName . '</h2>';
        $html .= '<p>Este módulo agrega un menu personalizado al panel de administración.</p>';
        return $html;
    }
}