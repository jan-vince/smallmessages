<?php

return 
[

  'plugin' => 
  [
    'name' => 'Small Messages',
    'label' => 'Messages',
    'short_name' => 'Messages',
    'description' => 'Manage all your messages',
    'category' => 'Small plugins',

    'label_created' => 'Created',
    'label_updated' => 'Updated',
  ],

  'permissions' => 
  [
    'access_settings' => 'Allow access to settings',
  ],

  'menu' => 
  [
    'new_message' => 'New message',
    'messages' => 'Messages',
    'categories' => 'Categories',
  ],

  'controllers' =>
  [
    'categories' =>
    [
      'reorder' =>
      [
        'label' => 'Reorder',
        'return_to_categories' => 'Back to categories',
      ],
    ],
  ],

  'components' =>
  [
    'common' =>
    [
      'properties' => 
      [
        'category_slug' => 'Category slug',
        'category_slug_description' => 'Get messages only from this category',
        'active_only' => 'Active only',
        'active_only_description' => 'Get only active messages',
        'limit' => 'Limit messages',
        'limit_description' => 'Left empty for all messages or set number to get only specific amount',
        'hide_with_cookie' => 'Hide with cookie',
        'hide_with_cookie_description' => 'Do not show messages that has active cookie (set when user clicked modal button)',
      ],
      'groups' =>
      [
        'filter_messages' => 'Filter messages',
        'limit' => 'Limit messages',
      ],
      'forms' =>
      [
        'empty_option' => 'Please select ...'
      ],
      'twig' =>
      [
        'btn_hide' => 'Hide',
      ]
    ],
    'messages' =>
    [
      'name' => 'Messages',
      'description' => 'Get and show messages',
    ],
  ],

  'common' => 
  [
    'columns' =>
    [
      'id' => 'ID',
      'title' => 'Title',
      'category' => 'Category',
      'date_from' => 'Visible from',
      'date_to' => 'Visible to',
      'active' => 'Active',
      'content' => 'Content',
      'slug' => 'Slug',
      'color' => 'Color',
      'sort_order' => 'Sort',
      'cookie_allow' => 'Set cookie',
    ],

    'form_fields' => 
    [
      'empty_option' => 'Not selected',
      'date_from' => 'Visible from',
      'date_from_comment' => 'Optional. If set the message will be shown only from this date and time.',
      'date_to' => 'Visible to',
      'date_to_comment' => 'Optional. If set the message will be shown only to this date and time.',
      'cookie_allow' => 'Controled by cookie',
      'cookie_allow_comment' => 'Set a cookie for this message when the modal window is closed and do not show the message until a cookie has expired.',
      'cookie_lifetime_days' => 'Cookie lifetime (in days)',
      'cookie_lifetime_days_comment' => 'Number of days for cookie to stay in browser',
    ],

    'tabs' =>
    [
      'info' => 'Info',
      'content' => 'Content',
      'cookies' => 'Cookies',
      'visibility' => 'Visibility',
      'restrictions' => 'Restrictions',
    ],
  ],

  'message' => 
  [
    'create_title' => 'Create new message',
    'update_title' => 'Update message',
  ],

  'categories' => 
  [
    'category' => 'Category',
    'menu_label' => 'Categories',
    'new_category' => 'New category',
  ],

  'settings' => 
  [

    'cookies' => 
    [
      'name' => 'Cookies',
      'description' => 'Everything about cookies',
    ],

    'tabs' => 
    [
      'messages' => 'Messages window',
      'design' => 'Design',
    ],

    'form_fields' => 
    [
      'title' => 'Title',
      'content' => 'Content',
      'slug' => 'Code',
      'url' => 'URL',
      'empty_option' => 'Not selected',
      'btn_hide_title' => 'Text for Hide button',
      'btn_hide_title_comment' => 'You can override default hide button text here or in your custom lang file',
      'ui_style' => 'Message window UI style',
      'ui_style_comment' => 'You can choose a default UI style for messages modal window.',
      'show_on_pages' => 'Show on specific pages only',
      'show_on_pages_comment' => 'You can specify one or more pages where messages box will be shown.',
      'cookie_pages_list' => 'Force to show on these pages',
      'cookie_pages_list_prompt' => 'Add page',
      'show_on_pages_list' => 'Show on these pages only',
      'show_on_pages_list_prompt' => 'Add page',
      'page_url' => 'Page URL',
      'page_url_comment' => 'Relative path, eg.: /contact, /en/products, ...',
      'force_show_with_cookie' => 'Force show',
      'force_show_with_cookie_comment' => 'Show message box even with actibve cookie (eg. when you always need to show message box on contact page).',
    ],
  ],
];