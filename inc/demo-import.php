<?php

function desvert_import_files() {
    return [
      [
        'import_file_name'           => 'Home One',
        'categories'                 => ['Home Page Template' ],
        'import_file_url'            => get_template_directory() . '/ocdi/demo-content2.xml',
        'import_widget_file_url'     => get_template_directory() . '/ocdi/widgets2.json',
        'import_customizer_file_url' => get_template_directory() . '/ocdi/customizer2.dat',
        'import_preview_image_url'   => get_template_directory_uri() . '/inc/demo-content/demo1.jpg',
        'preview_url'                => 'https://www.desvert.com',
        'import_notice'              => 'After Import The Demo dat You need Setup Your Home Page & Blog Pages from Settings > Reading Settings > HomePage With Changes The Menu Options',
      ],
      [
        'import_file_name'           => 'Home Two',
        'categories'                 => [ 'Home Page Template'],
        'import_file_url'            => get_template_directory() . '/ocdi/demo-content2.xml',
        'import_widget_file_url'     => get_template_directory() . '/ocdi/widgets2.json',
        'import_customizer_file_url' => get_template_directory() . '/ocdi/customizer2.dat',
        'import_preview_image_url'   => get_template_directory_uri() . '/inc/demo-content/demo2.jpg',
        'preview_url'                => 'https://www.desvert.com',
        'import_notice'              => 'After Import The Demo dat You need Setup Your Home Page & Blog Pages from Settings > Reading Settings > HomePage With Changes The Menu Options',
      ],
      [
        'import_file_name'           => 'About Page',
        'categories'                 => [ 'Immer Page Template'],
        'import_file_url'            => get_template_directory() . '/ocdi/demo-content2.xml',
        'import_widget_file_url'     => get_template_directory() . '/ocdi/widgets2.json',
        'import_customizer_file_url' => get_template_directory() . '/ocdi/customizer2.dat',
        'import_preview_image_url'   => get_template_directory_uri() . '/inc/demo-content/demo3.jpg',
        'preview_url'                => 'https://www.desvert.com/about-desvert/',
        'import_notice'              => 'After Import The Demo dat You need Setup Your Home Page & Blog Pages from Settings > Reading Settings > HomePage With Changes The Menu Options',
      ],
    ];
  }
  add_filter( 'ocdi/import_files', 'desvert_import_files' );
?>