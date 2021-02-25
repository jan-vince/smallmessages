<?php namespace JanVince\SmallMessages\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use JanVince\SmallMessages\Models\Category;
use Flash;
use JanVince\SmallMessages\Models\Settings;

class Categories extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend.Behaviors.ReorderController',
        ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = ['janvince.smallmessages.access_categories'];

    public function __construct() {

        parent::__construct();

        BackendMenu::setContext('JanVince.SmallMessages', 'smallmessages', 'categories');

    }

}
