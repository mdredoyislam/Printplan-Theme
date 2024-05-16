<?php

function printplan_import_files() {
    return [
      [
        'import_file_name'           => 'Main Site',
        'categories'                 => ['Home Pages' ],
        'import_file_url'            => get_template_directory() . '/ocdi/demo-content2.xml',
        'import_widget_file_url'     => get_template_directory() . '/ocdi/widgets2.json',
        'import_customizer_file_url' => get_template_directory() . '/ocdi/customizer2.dat',
        'import_preview_image_url'   => PRINTPLAN_THEME_URI . '/framework/demo-data/demo-content/demo1.png',
        'preview_url'                => 'https://www.desvert.com',
        'import_notice'              => 'After Import The Demo dat You need Setup Your Home Page & Blog Pages from Settings > Reading Settings > HomePage With Changes The Menu Options',
      ],
      [
        'import_file_name'           => 'Home Two',
        'categories'                 => [ 'Home Pages'],
        'import_file_url'            => get_template_directory() . '/ocdi/demo-content2.xml',
        'import_widget_file_url'     => get_template_directory() . '/ocdi/widgets2.json',
        'import_customizer_file_url' => get_template_directory() . '/ocdi/customizer2.dat',
        'import_preview_image_url'   => PRINTPLAN_THEME_URI . '/framework/demo-data/demo-content/demo2.png',
        'preview_url'                => 'https://www.desvert.com',
        'import_notice'              => 'After Import The Demo dat You need Setup Your Home Page & Blog Pages from Settings > Reading Settings > HomePage With Changes The Menu Options',
      ],
      [
        'import_file_name'           => 'About Page',
        'categories'                 => [ 'Immer Pages'],
        'import_file_url'            => get_template_directory() . '/ocdi/demo-content2.xml',
        'import_widget_file_url'     => get_template_directory() . '/ocdi/widgets2.json',
        'import_customizer_file_url' => get_template_directory() . '/ocdi/customizer2.dat',
        'import_preview_image_url'   => PRINTPLAN_THEME_URI . '/framework/demo-data/demo-content/demo3.png',
        'preview_url'                => 'https://www.desvert.com/about-desvert/',
        'import_notice'              => 'After Import The Demo dat You need Setup Your Home Page & Blog Pages from Settings > Reading Settings > HomePage With Changes The Menu Options',
      ],
    ];
  }
  add_filter( 'ocdi/import_files', 'printplan_import_files' );
?>