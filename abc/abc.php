<?php
//use PrestaShop\Module\Modulea\YourService;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Abc extends Module
{
    public function __construct()
    {
        $this->name = 'abc';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'VotreNom';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => "9.9.9");
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Module ABC');
        $this->description = $this->l('Description du module B.');

        $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir désinstaller ?');

        $myService = $this->get('abc.module_a.your_service');
        $myService->sayHello();
    }
    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
}