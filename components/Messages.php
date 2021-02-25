<?php 

namespace JanVince\SmallMessages\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use JanVince\SmallMessages\Models\Category;
use JanVince\SmallMessages\Models\Message;
use JanVince\SmallMessages\Models\Settings;
use System\Classes\PluginManager;
use Redirect;
use Input;
use Session;
use Flash;
use Form;
use Log;
use App;

class Messages extends ComponentBase
{

    public function componentDetails() {

        return [
            'name'        => 'janvince.smallmessages::lang.components.messages.name',
            'description' => 'janvince.smallmessages::lang.components.messages.description'
        ];
    }

    public function defineProperties()
    {

        return 
        [
            'activeOnly'      => 
            [
                'title'       => 'janvince.smallmessages::lang.components.common.properties.active_only',
                'description' => 'janvince.smallmessages::lang.components.common.properties.active_only_description',
                'type'        => 'checkbox',
                'default'     => true,
            ],

            'hide_with_cookie'   => 
            [
                'title'       => 'janvince.smallmessages::lang.components.common.properties.hide_with_cookie',
                'description' => 'janvince.smallmessages::lang.components.common.properties.hide_with_cookie_description',
                'type'        => 'checkbox',
                'default'     => true,
            ],

            'categorySlug'  => 
            [
                'title' => 'janvince.smallmessages::lang.components.common.properties.category_slug',
                'description' => 'janvince.smallmessages::lang.components.common.properties.category_slug_description',
                'type'  => 'dropdown',
            ],

            'limit'   => 
            [
                'title'       => 'janvince.smallmessages::lang.components.common.properties.limit',
                'description' => 'janvince.smallmessages::lang.components.common.properties.limit_description',
                'type'        => 'string',
                'default'     => null,
            ],            

        ];
    }

    public function getCategorySlugOptions() {

        $categories = [];

        $categories = Category::isActive()->orderBy('name')->lists('title', 'slug');

        $emptyOption = [0 => e(trans('janvince.smallmessages::lang.components.common.forms.empty_option')) ];

        return $emptyOption + $categories;

    }

    public function onRun() 
    {

        $this->page['messagesItems'] = $this->items();

    }

    /**
     * Get messages
     * return Collection()
     */
    public function items() 
    {

        $messages = Message::query();

        /**
         *  Filter category
         */
        if( $this->property('categorySlug') ) 
        {

            $messages->whereHas('category', function ($query) 
            {

                $query->where('slug', $this->property('categorySlug'));

            });
        }

        /**
         *  Filter active only
         */
        if( $this->property('activeOnly') ) 
        {
            $messages->isActive();
        }

        /**
         *  Filter by date_from
         */
        $messages->where(function ($query) {
            $query->whereNull('date_from')
                ->orWhere('date_from', '<', date("Y-m-d H:i:s"));
        });

        /**
         *  Filter by date_to
         */
        $messages->where(function ($query) {
            $query->whereNull('date_to')
                ->orWhere('date_to', '>', date("Y-m-d H:i:s"));
        });

        /**
         *  Default order
         */
        $messages->orderBy('date_from', 'DESC');

        /**
         *  Limit
         */
        if( $this->property('limit') ) 
        {
            $messages->take( $this->property('limit') );
        }

        $data = $messages->get();

        /**
         * Filter messages with active cookie
         */
        if( $this->property('hide_with_cookie') ) 
        {
            foreach($data as $key => $value) {

                if($value->id and !empty($_COOKIE[('sm-cookie-'.$value->id)])) {
                    $data->pull($key);
                }
            }
        }

        return $data;

    }

}
