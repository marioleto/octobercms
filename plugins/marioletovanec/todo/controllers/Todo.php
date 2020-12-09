<?php namespace MarioLetovanec\Todo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Todo extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('MarioLetovanec.Todo', 'main-menu-item');
    }
}
