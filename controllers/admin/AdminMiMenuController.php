class AdminMiMenuController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = '';
        $this->className = '';
        $this->lang = false;
        $this->addRowAction('');
        parent::__construct();
    }

    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign(array(
            'content' => $this->module->getContent(),
        ));

        $this->setTemplate('module:mi_menu/views/templates/admin/menu.tpl');
    }
}