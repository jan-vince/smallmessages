<?php

namespace JanVince\SmallMessages;

use System\Classes\PluginBase;
use System\Classes\PluginManager;
use JanVince\SmallMessages\Models\Settings;
use Config;
use Backend;
use Validator;
use Log;
use Yaml;
use File;
use Storage;


class Plugin extends PluginBase {

    public function boot() {

    }

    public function registerSettings() {

        return [
            'messages' => [
                'label' => 'janvince.smallmessages::lang.plugin.name',
                'description' => 'janvince.smallmessages::lang.plugin.description',
                'category'    => 'Small plugins',
                'icon' => 'icon-file-text',
                'class' => 'JanVince\SmallMessages\Models\Settings',
                'keywords' => 'messages message notes note popup notification alert',
                'order' => 990,
                'permissions' => ['janvince.smallmessages.access_settings'],
            ],
        ];
    }

    public function registerComponents() {
        
        return [
            'JanVince\SmallMessages\Components\Messages' => 'messages',
        ];
    }

    public function registerNavigation()
    {
        $nav = [
            'smallmessages' => [
                'label'       => 'janvince.smallmessages::lang.plugin.short_name',
                'url'         => Backend::url('janvince/smallmessages/messages'),
                'icon'        => 'icon-file-text',
                'permissions' => ['janvince.smallmessages.*'],
                'order'       => 991,

                'sideMenu' => [
                    'messages' => [
                        'label'       => 'janvince.smallmessages::lang.menu.messages',
                        'url'         => Backend::url('janvince/smallmessages/messages'),
                        'icon'        => 'icon-file-text',
                        'permissions' => ['janvince.smallmessages.access_messages']
                    ],
                    'categories' => [
                        'label'       => 'janvince.smallmessages::lang.menu.categories',
                        'url'         => Backend::url('janvince/smallmessages/categories'),
                        'icon'        => 'icon-sitemap',
                        'permissions' => ['janvince.smallmessages.access_categories']
                    ],
                ],
            ],
        ];

        return $nav;

    }

    public function registerListColumnTypes()
    {
        return [
            'sm_strong' => function($value) { return '<strong>'. $value . '</strong>'; },
            'sm_color' => function($value) { if($value) return '<span class="oc-icon-circle" style="color: '.$value.'"></span>'; },
            'sm_text' => function($value) { $content = mb_substr(strip_tags($value), 0, 150); if(strlen($content) > 150) { return ($content . '...'); } else { return $content; } },
            'sm_array_preview' => function($value) { $content = mb_substr(strip_tags( implode(' --- ', $value) ), 0, 150); if(count($content) > 150) { return ($content . '...'); } else { return $content; } },
            'sm_switch_icon_star' => function($value) { return '<div class="text-center"><span class="'. ($value==1 ? 'oc-icon-circle text-success' : 'text-muted oc-icon-circle text-draft') .'">' . ($value==1 ? e(trans('janvince.smallcontactform::lang.models.message.columns.new')) : e(trans('janvince.smallcontactform::lang.models.message.columns.read')) ) . '</span></div>'; },
            'sm_switch_input' => function($value) { if($value){return '<input type="checkbox" checked>';} else { return '<input type="checkbox">';} },
            'sm_switch' => function($value) { if($value){return '<span class="list-badge badge-success"><span class="icon-check"></span></span>';} else { return '<span class="list-badge badge-danger"><span class="icon-minus"></span></span>';} },
            'sm_attached_images_count' => function($value){ return (count($value) ? count($value) : NULL); },
        ];
    }

    public function registerMarkupTags() {

        $settings = Settings::instance();

        return [
            'filters' => [],
            'functions' => [
                'settingsGet' => function ($value, $default = NULL) use ($settings){

                    if(empty($settings->$value)) {
                        return $default;
                    } else {
                        return $settings->$value;
                    }
                }
            ]
        ];
    }


}
