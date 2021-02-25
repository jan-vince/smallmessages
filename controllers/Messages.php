<?php

namespace JanVince\SmallMessages\Controllers;

use Db;
use App;
use Log;
use Lang;
use Flash;
use Backend;
use BackendAuth;
use BackendMenu;
use Backend\Classes\Controller;
use JanVince\SmallMessages\Models\Message;
use Carbon\Carbon;

class Messages extends Controller {

    public $requiredPermissions = ['janvince.smallmessages.access_messages'];

    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
    ];

    public $listConfig = 'config_list.yaml';

    public $formConfig = 'config_form.yaml';

    public function __construct() 
    {
        parent::__construct();
        BackendMenu::setContext('JanVince.SmallMessages', 'smallmessages', 'messages');
    }
}
