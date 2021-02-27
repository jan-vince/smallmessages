<?php

namespace JanVince\SmallMessages\Models;

use Model;
use App;
use Log;
use Flash;
use System\Classes\PluginManager;

class Settings extends Model {

    public $implement = [
        'System.Behaviors.SettingsModel',
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];

    public $translatable = [
        'btn_hide_title'
    ];

    protected $jsonable = [
    ];

    public $requiredPermissions = ['janvince.smallmessages.access_settings'];

    public $settingsCode = 'janvince_smallmessages_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        // 'set_cookies_lifetime_days' => 'numeric',
    ];
}
