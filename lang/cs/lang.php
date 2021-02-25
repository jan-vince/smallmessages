<?php

return 
[

  'plugin' => 
  [
    'name' => 'Zprávy',
    'label' => 'Zprávy',
    'short_name' => 'Zprávy',
    'description' => 'Administrace zpráv',
    'category' => 'Small plugins',

    'label_created' => 'Created',
    'label_updated' => 'Updated',
  ],

  'permissions' => 
  [
    'access_settings' => 'Umožnit přístup k nastavení pluginu',
  ],

  'menu' => 
  [
    'new_message' => 'Nová zpráva',
    'messages' => 'Zprávy',
    'categories' => 'Kategorie',
  ],

  'controllers' =>
  [
    'categories' =>
    [
      'reorder' =>
      [
        'label' => 'Změnit pořadí',
        'return_to_categories' => 'Zpět na kategorie',
      ],
    ],
  ],

  'components' =>
  [
    'common' =>
    [
      'properties' => 
      [
        'category_slug' => 'Slug kategorie',
        'category_slug_description' => 'Načíst zprávy pouze z této kategorie',
        'active_only' => 'Pouze aktivní',
        'active_only_description' => 'Načíst pouze zprávy, které jsou označené jako aktivní.',
        'limit' => 'Počet zpráv',
        'limit_description' => 'Nechte prázdné pro všechny nebo zadejte maximální počet zpráv, které chcete zobrazit.',
        'hide_with_cookie' => 'Skrýt pomocí cookie',
        'hide_with_cookie_description' => 'Nezobrazovat zprávy, u kterých je v prohlížeči uloženo aktivní cookie (uložené po kliknutí na tlačítko pro skrytí ozna zpráv).',
      ],
      'groups' =>
      [
        'filter_messages' => 'Filtrovat zprávy',
        'limit' => 'Omezit počet zpráv',
      ],
      'forms' =>
      [
        'empty_option' => 'Můžete vybrat ...'
      ],
      'twig' =>
      [
        'btn_hide' => 'Skrýt',
      ]
    ],
    'messages' =>
    [
      'name' => 'Zprávy',
      'description' => 'Získat a zobrazit zprávy',
    ],
  ],

  'common' => 
  [
    'columns' =>
    [
      'id' => 'ID',
      'title' => 'Nadpis',
      'category' => 'Kategorie',
      'date_from' => 'Zobrazovat od',
      'date_to' => 'Zobrazovat do',
      'active' => 'Aktivní',
      'content' => 'Obsah',
      'slug' => 'Slug',
      'color' => 'Barva',
      'sort_order' => 'Pořadí',
      'cookie_allow' => 'Nastavit cookie',
    ],

    'form_fields' => 
    [
      'empty_option' => 'Můžete vybrat ...',
      'date_from' => 'Zobrazovat od',
      'date_from_comment' => 'Volitelně. Pokud je nastaveno, zpráva se zobrazí až od tohoto data.',
      'date_to' => 'Zobrazovat do',
      'date_to_comment' => 'Volitelně. Pokud je nastaveno, zpráva se zobrazí jen do tohoto data.',
      'cookie_allow' => 'Řídit pomocí cookie',
      'cookie_allow_comment' => 'Pokud je povoleno, po kliknutí na tlačítko Skrýt zprávu se nastaví cookie a zpráva se nezobrazí až do vypršení platnosti cookie.',
      'cookie_lifetime_days' => 'Doba platnosti cookie (ve dnech)',
      'cookie_lifetime_days_comment' => 'Počet dnů do vypršení platnosti cookie.',
    ],

    'tabs' =>
    [
      'info' => 'Info',
      'content' => 'Obsah',
      'cookie' => 'Cookie',
      'visibility' => 'Viditelnost',
      'restrictions' => 'Omezení'
    ],
  ],

  'message' => 
  [
    'create_title' => 'Vytvořit novou zprávu',
    'update_title' => 'Aktualizovat zprávu',
  ],

  'categories' => 
  [
    'category' => 'Kategorie',
    'menu_label' => 'Kategorie',
    'new_category' => 'Nová kategorie',
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
      'messages' => 'Okno se zprávami',
      'design' => 'Design',
    ],

    'form_fields' => 
    [
      'title' => 'Nadpis',
      'content' => 'Obsah',
      'slug' => 'Slug',
      'url' => 'URL',
      'empty_option' => 'Můžete vybrat ...',
      'btn_hide_title' => 'Text tlačítka',
      'btn_hide_title_comment' => 'Můžete nastavit vlastní text tlačítka pro skrytí okna zpráv.',
      'ui_style' => 'UI styl okna zpráv',
      'ui_style_comment' => 'Můžete vybrat, jaký design má mít okno zpráv.',
      'show_on_pages' => 'Zobrazit jen na vybraných stránkách',
      'show_on_pages_comment' => 'Můžete přidat jednu nebo více stránek, na kterých se může zobrazit box se zprávami.',
      'cookie_pages_list' => 'Vynutit zobrazení na těchto stránkách',
      'cookie_pages_list_comment' => 'Na těchto stránkách se zobrazí box zpráv i v případě, že existuje uložené cookie',
      'cookie_pages_list_prompt' => 'Přidat stránku',
      'show_on_pages_list' => 'Zobrazit pouze na těchto stránkách',
      'show_on_pages_list_prompt' => 'Přidat stránku',
      'page_url' => 'URL adresa',
      'page_url_comment' => 'Relativní cesta, eg.: /kontakt, /cs/produkty, ...',
    ],
  ],
];