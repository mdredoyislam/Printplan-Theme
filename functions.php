<?php
require_once( get_theme_file_path( '/inc/template-tags.php' ) );
require_once( get_theme_file_path( '/inc/breadcrumbs.php' ) );

defined( 'PRINTPLAN_THEME_URI' ) or define( 'PRINTPLAN_THEME_URI', get_template_directory_uri() );
define( 'PRINTPLAN_THEME_DRI', get_template_directory() );
define( 'PRINTPLAN_IMG_URL', PRINTPLAN_THEME_URI . '/assets/images/' );
define( 'PRINTPLAN_CSS_URL', PRINTPLAN_THEME_URI . '/assets/css/' );
define( 'PRINTPLAN_JS_URL', PRINTPLAN_THEME_URI . '/assets/js/' );
define( 'PRINTPLAN_FRAMEWORK_DRI', PRINTPLAN_THEME_DRI . '/framework/' );

require_once PRINTPLAN_FRAMEWORK_DRI . 'styles/index.php';
require_once PRINTPLAN_FRAMEWORK_DRI . 'styles/daynamic-style.php';
require_once PRINTPLAN_FRAMEWORK_DRI . 'scripts/index.php';
require_once PRINTPLAN_FRAMEWORK_DRI . 'demo-data/demo-import.php';
require_once PRINTPLAN_FRAMEWORK_DRI . 'printplan/printplan-config.php';
require_once PRINTPLAN_FRAMEWORK_DRI . 'tgm/class-tgm-plugin-activation.php';
require_once PRINTPLAN_FRAMEWORK_DRI . 'tgm/config-tgm.php';
//require_once PRINTPLAN_FRAMEWORK_DRI . 'dashboard/class-dashboard.php';
require_once PRINTPLAN_FRAMEWORK_DRI . 'classes/printplan-int.php';
require_once PRINTPLAN_FRAMEWORK_DRI . 'classes/printplan-act.php';
require_once PRINTPLAN_THEME_DRI . '/assets/css/custom-style.php';

if ( site_url() == "http://localhost/WP/Printplan/" ) {
    define( "_S_VERSION", time() );
} else {
    define( "_S_VERSION", wp_get_theme()->get( "_S_VERSION" ) );
}

/**
 * Theme option compatibility.
 */
if ( ! function_exists( 'printplan_get_options' ) ) :
	function printplan_get_options( $key ) {
		global $dvprintplan_options;
		$opt_pref = 'dvprintplan_';
		if ( empty( $dvprintplan_options ) ) {
			$dvprintplan_options = get_option( $opt_pref . 'options' );
		}
		$index = $opt_pref . $key;
		if ( ! isset( $dvprintplan_options[ $index ] ) ) {
			return false;
		}
		return $dvprintplan_options[ $index ];
	}
endif;

//After Setup Theme
if ( ! function_exists( 'dvprintplan_setup' ) ) :
    function dvprintplan_setup() {

        load_theme_textdomain( 'dvprintplan', 
        get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        register_nav_menus(
            array(
                'primary-menu' => esc_html__( 'Primary Menu', 'dvprintplan' ),
                'footer-menu' => esc_html__( 'Footer Menu', 'dvprintplan' ),
            )
        );
        add_theme_support( 'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
        add_theme_support( 'custom-background',
            apply_filters(
                'dvprintplan_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
        $dvprintplan_custom_header_details = array(
            'header-text'        => true,
            'default-text-color' => '#222',
            'width'              => 1320,
            'height'             => 600,
            'flex-height'        => true,
            'flex-width'         => true,
        );
        add_theme_support( "custom-header", $dvprintplan_custom_header_details );
        add_theme_support( "post-formats", array( "image", "quote", "video", "audio", "link" ) );
        add_image_size("dvprintplan-square",400,400,true);
        add_image_size("dvprintplan-square-new1",401,401,array("left","top"));
        add_image_size("dvprintplan-square-new2",500,500,array("center","center"));
        add_image_size("dvprintplan-square-new3",600,600,array("right","center"));
    }
endif;
add_action( 'after_setup_theme', 'dvprintplan_setup' );

/**
 * google font compatibility.
 */
function dvprintplan_google_font() {
	global $dvprintplan_options;
	$enable_google_fonts = isset( $dvprintplan_options['enable_google_fonts'] ) && $dvprintplan_options['enable_google_fonts'] == 0;

	$protocol   = is_ssl() ? 'https' : 'http';
	$subsets    = 'latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese';
	$variants   = ':300,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$query_args = array(
		'family' => 'Syne' . $variants,
		'subset' => $subsets,
	);
	$font_url   = add_query_arg( $query_args, $protocol . '://fonts.googleapis.com/css?display=swap' );
	if ( $enable_google_fonts != 1 ) {
		wp_enqueue_style( 'dvprintplan-google-fonts', $font_url, array(), null );
	}
}
add_action( 'init', 'dvprintplan_google_font' );

function dvprintplan_elementor_library() {
	$pageslist = get_posts(
		array(
			'post_type'      => 'elementor_library',
			'posts_per_page' => -1,
		)
	);
	$pagearray = array();
	if ( ! empty( $pageslist ) ) {
		foreach ( $pageslist as $page ) {
			$pagearray[ $page->ID ] = $page->post_title;
		}
	}
	return $pagearray;
}

/**
 * Undocumented function
 */
function dvprintplan_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dvprintplan_content_width', 640 );
}
add_action( 'after_setup_theme', 'dvprintplan_content_width', 0 );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once( get_theme_file_path( '/inc/class-wp-bootstrap-navwalker.php' ) );
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dvprintplan_widgets_init() {
	register_sidebar(
        array(
            'name'          => __( 'Sidebar Widgets', 'dvprintplan' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Right Sidebar', 'dvprintplan' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title box-title2 mb-20">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Footer Left', 'dvprintplan' ),
            'id'            => 'footer-left',
            'description'   => __( "Widgetized Area On The Left Side", 'dvprintplan' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer Right', 'dvprintplan' ),
            'id'            => 'footer-right',
            'description'   => __( "Widgetized Area On The Right Side", 'dvprintplan' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '',
            'after_title'   => '',
        )
	);
}
add_action( 'widgets_init', 'dvprintplan_widgets_init' );



function dvprintplan_the_excerpt( $excerpt ) {
    if ( ! post_password_required() ) {
        return $excerpt;
    } else {
        echo get_the_password_form();
    }
}
add_filter( "the_excerpt", "dvprintplan_the_excerpt" );

function dvprintplan_protected_title_change() {
    return "%s";
}
add_filter( "protected_title_format", "dvprintplan_protected_title_change" );


function dvprintplan_menu_item_class( $classes, $item ) {
    $classes[] = "pl-4 pl-md-0 ml-0 ml-md-4";
    //$item[] = "nav-links";
    return $classes;
   // return $item;
}
add_filter( "nav_menu_css_class", "dvprintplan_menu_item_class", 10, 2 );


if(!function_exists("dvprintplan_about_page_template_banner")){
    function dvprintplan_about_page_template_banner() {
        if ( is_page() ) {
            $dvprintplan_feat_image = get_the_post_thumbnail_url( null, "large" );
            ?>
            <style>
                .page-header {
                    background-image: url(<?php echo $dvprintplan_feat_image;?>);
                }
            </style>
            <?php
        }

        if ( is_front_page() ) {
            if ( current_theme_supports( "custom-header" ) ) {
                ?>
                <style>
                    .header {
                        background-image: url(<?php header_image();?>);
                        background-size: cover;
                        margin-bottom: 50px;
                    }

                    .header h1.heading a, h3.tagline {
                        color: #<?php echo get_header_textcolor();?>;

                    <?php
                    if(!display_header_text()){
                        echo "display: none;";
                    }
                    ?>
                    }

                </style>
                <?php
            }
        }
    }
    add_action( "wp_head", "dvprintplan_about_page_template_banner", 11 );
}

function dvprintplan_body_class( $classes ) {
    unset( $classes[ array_search( "single-format-audio", $classes ) ] );
    $classes[] = "newclass";
    return $classes;
}
add_filter( "body_class", "dvprintplan_body_class" );

function dvprintplan_post_class( $classes ) {
    unset( $classes[ array_search( "format-audio", $classes ) ] );

    return $classes;
}
add_filter( "post_class", "dvprintplan_post_class" );
add_filter("wp_calculate_image_srcset","__return_null");

if(!function_exists("dvprintplan_todays_date")) {
    function dvprintplan_todays_date() {
        echo date( "d/m/y" );
    }
}

function dvprintplan_highlight_search_results($text){
    if(is_search()){
        $pattern = '/('. join('|', explode(' ', get_search_query())).')/i';
        $text = preg_replace($pattern, '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}
add_filter('the_content', 'dvprintplan_highlight_search_results');
add_filter('the_excerpt', 'dvprintplan_highlight_search_results');
add_filter('the_title', 'dvprintplan_highlight_search_results');

function dvprintplan_modify_main_query($wpq){
    if(is_home() && $wpq->is_main_query()){
        $wpq->set("post__not_in",array());
    }
}
add_action("pre_get_posts","dvprintplan_modify_main_query");

function dvprintplan_tag_list(){
    global $post;
    $tags = get_the_tags( $post->ID );
    $separator = ' ';
    $output = '';
    if($tags){
        echo "<h4 class='box-title3 d-inline-block'>" . __('Tags : ', 'dvprintplan') . "</h4> ";
        foreach($tags as $tag) {
            if($tag->slug != "dvprintplantag"){
            $output .= '<a href="'.get_tag_link( $tag->term_id ).'" title="' . esc_attr( sprintf( __( "%s", 'dvprintplan' ), $tag->name ) ) . '">'.$tag->name.'</a>'.$separator;
            }
        }
        echo trim($output, $separator);
    }
}