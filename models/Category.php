<?php

namespace JanVince\SmallMessages\Models;

use Str;
use Model;
use URL;
use October\Rain\Router\Helper as RouterHelper;
use Cms\Classes\Page as CmsPage;
use Cms\Classes\Theme;

class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    public $table = 'janvince_smallmessages_categories';

    public $timestamps = true;

    /*
     * Validation
     */
    public $rules = [
        'title' => 'required',
        'slug' => 'required|between:3,64|unique:janvince_smallmessages_categories',
    ];

    protected $guarded = [];


    /**
     * @var array Relations
     */
    public $hasMany = [
        'messages' => [
            'JanVince\SmallMessages\Models\Messages'
        ]
    ];

    /**
     *  SCOPES
     */
    public function scopeIsActive($query) {
        return $query->where('active', '=', true);
    }

}
