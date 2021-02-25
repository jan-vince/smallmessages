<?php

namespace JanVince\SmallMessages\Models;

use Str;
use Model;
use URL;
use October\Rain\Router\Helper as RouterHelper;
use Cms\Classes\Page as CmsPage;
use Cms\Classes\Theme;
use \Carbon\Carbon;

class Message extends Model {

    use \October\Rain\Database\Traits\Validation;

    public $table = 'janvince_smallmessages_messages';
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $timestamps = true;

    /*
     * Validation
     */
    public $rules = [
    ];

    protected $dates = ['date_from', 'date_to'];

    public $translatable = [];

    protected $guarded = [];

    protected $jsonable = [
        'cookie_pages_list',
        'show_on_pages_list',
    ];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'category' => [
            'JanVince\SmallMessages\Models\Category',
        ],
    ];

    /**
     *  SCOPES
     */
    public function scopeIsActive($query) {
        return $query->where('active', '=', true);
    }

}
