<?php
/**
 * Radiadores Innpa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Radiadores_Innpa
 */
@ini_set('upload_max_size','64M');
		@ini_set('post_max_size','64M');
		@ini_set('max_execution_time','300');
if ( ! function_exists( 'inppa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function inppa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Radiadores Innpa, use a find and replace
		 * to change 'inppa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'inppa', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'inppa' ),
			'menu-2' => esc_html__( 'submenu', 'inppa' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'inppa_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		/**
		 * Add images extra sizes
		 *
		 */
		add_image_size( 'blog-image', 1140, 760, array( 'center', 'center' ) );
		add_image_size( 'slider', 1200, 500, array( 'center', 'center' ) );
		add_image_size( 'portrait', 500, 700, array( 'center', 'center' ) );
		add_image_size( 'testimonial-portrait', 260, 300, array( 'center', 'center' ) );
		add_image_size( 'feature', 400, 300, true );
		add_image_size( 'available-homes', 500, 279, array( 'center', 'center' ) );


	}
endif;
add_action( 'after_setup_theme', 'inppa_setup' );

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inppa_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'inppa_content_width', 640 );
}
add_action( 'after_setup_theme', 'inppa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inppa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'inppa' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'inppa' ),
		'before_widget' => '<div id="%1$s" class="widget p-3 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'inppa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

/**
 * Enqueue scripts and styles.
 */
 //Making jQuery to load from Google Library
/*function replace_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js', false, '1.11.3');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery');*/
function theme_scripts() {

wp_enqueue_script('jquery');
	
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), time(), true );
	wp_enqueue_style( 'owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
	wp_enqueue_style( 'owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendor/fontawesome-free/css/all.min.css', '20151215', true);
	
	
	
	wp_enqueue_script( 'theme-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'theme-easing', get_template_directory_uri() . '/assets/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'olw', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), time(), true );
	
	wp_enqueue_script( 'theme-appjs', get_template_directory_uri() . '/assets/js/dev/app.js', array('jquery'), time(), true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Register Custom Navigation Walker
  */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
/** 
 * Register Custom post types
 */
require get_template_directory() . '/inc/cpt_customs.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// register a custom post type called 'animals'
function wptp_create_post_type() {
    $labels = array( 
        'name' => __( 'Productos / Servicios' ),
        'singular_name' => __( 'product' ),
        'add_new' => __( 'New Productos / Servicios' ),
        'add_new_item' => __( 'Add Productos / Servicios' ),
        'edit_item' => __( 'Edit Productos / Servicios' ),
        'new_item' => __( 'New Productos / Servicios' ),
        'view_item' => __( 'View Productos / Servicios' ),
        'search_items' => __( 'Search Productos / Servicios' ),
        'not_found' =>  __( 'No Productos / Servicios Found' ),
        'not_found_in_trash' => __( 'No Productos / Servicios found in Trash' ),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
            'title', 
            'editor', 
            'excerpt', 
            'custom-fields', 
            'thumbnail',
            'page-attributes'
        )
    );
    register_post_type( 'product', $args );
} 
add_action( 'init', 'wptp_create_post_type' );


// register a taxonomy called 'Animal Family'

function create_product_tax() {

	$labels = array(
		'name'              => _x( 'Categoria Producto', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Categoria Productos', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categoria Producto', 'textdomain' ),
		'all_items'         => __( 'All Categoria Producto', 'textdomain' ),
		'parent_item'       => __( 'Parent Categoria Productos', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Categoria Productos:', 'textdomain' ),
		'edit_item'         => __( 'Edit Categoria Productos', 'textdomain' ),
		'update_item'       => __( 'Update Categoria Productos', 'textdomain' ),
		'add_new_item'      => __( 'Add New Categoria Productos', 'textdomain' ),
		'new_item_name'     => __( 'New Categoria Productos Name', 'textdomain' ),
		'menu_name'         => __( 'Categoria Productos', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'textdomain' ),
		'hierarchical' => true,
		'public' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'rewrite' => false,
	);
	register_taxonomy( 'product-cat', 'product', $args );

}
add_action( 'init', 'create_product_tax' );
// Register Taxonomy Categoria Productos
function create_categoriaproductos_tax() {

	$labels = array(
		'name'              => _x( 'Categoria Producto', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Categoria Productos', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categoria Producto', 'textdomain' ),
		'all_items'         => __( 'All Categoria Producto', 'textdomain' ),
		'parent_item'       => __( 'Parent Categoria Productos', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Categoria Productos:', 'textdomain' ),
		'edit_item'         => __( 'Edit Categoria Productos', 'textdomain' ),
		'update_item'       => __( 'Update Categoria Productos', 'textdomain' ),
		'add_new_item'      => __( 'Add New Categoria Productos', 'textdomain' ),
		'new_item_name'     => __( 'New Categoria Productos Name', 'textdomain' ),
		'menu_name'         => __( 'Categoria Productos', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'textdomain' ),
		'hierarchical' => false,
		'public' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'rewrite' => false,
	);
	register_taxonomy( 'create_product_tax', array(), $args );

}
add_action( 'init', 'create_categoriaproductos_tax' );


function product_type( $meta_boxes ) {
	$prefix = 'prefix-';

	$meta_boxes[] = array(
		'id' => 'product_type',
		'title' => esc_html__( 'Tipo de producto', 'metabox-online-generator' ),
		'post_types' => array('product' ),
		'context' => 'after_title',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'product_type',
				'name' => esc_html__( 'Tipo de producto', 'metabox-online-generator' ),
				'type' => 'select',
				'placeholder' => esc_html__( 'Select an Item', 'metabox-online-generator' ),
				'options' => array(
					'producto' => 'Producto',
					'servicio' => 'Servicio',
				),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'product_type' );


function tax_to_page( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'tax_to_page',
		'title' => esc_html__( 'Asociar Categoria', 'metabox-online-generator' ),
		'post_types' => array('page' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'page_taxonomy',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Categoria', 'metabox-online-generator' ),
				'taxonomy' => 'product-cat',
				'field_type' => 'select',
				'parent' => 'true',
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'tax_to_page' );


function service_block( $meta_boxes ) {
	$prefix = 'service_block';

	$meta_boxes[] = array(
		'id' => 'service_block',
		'title' => esc_html__( 'Bloque Extra de información', 'metabox-online-generator' ),
		'post_types' => array('post', 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'service_block_title',
				'type' => 'text',
				'name' => esc_html__( 'Titulo de Bloque', 'metabox-online-generator' ),
			),
			array(
				'id' => $prefix . 'service_block_content',
				'type' => 'textarea',
				'name' => esc_html__( 'Contenido de bloque', 'metabox-online-generator' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'service_block' );



function attached_files( $meta_boxes ) {
	$prefix = 'prefix-';

	$meta_boxes[] = array(
		'id' => 'attached_files_to_page',
		'title' => esc_html__( 'Agregar Descargas', 'metabox-online-generator' ),
		'post_types' => array('post', 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'attace_files',
				'type' => 'file_advanced',
				'name' => esc_html__( 'Agregar Descarga', 'metabox-online-generator' ),
				
				'max_status'       => 'false',
				'mime_type'        => 'application',
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'attached_files' );




function contact_addreses( $meta_boxes ) {
	$prefix = 'prefix-';

	$meta_boxes[] = array(
		'id' => 'contact_addreses',
		'title' => esc_html__( 'Direcciones Contacto', 'contact_addreses' ),
		'post_types' => array('post', 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'addreses_list',
				'type' => 'text_list',
				'name' => esc_html__( 'Lista de Direcciones', 'contact_addreses' ),
				'options' => array(
					'Ciudad' => 'ciudad',
					'Direccion' => 'Dirección',
					'Email' => 'email',
					'telefono_1' => 'telefono 1',
					'telefono_2' => 'telefono 2',
					'url' => 'url',
				),
				'clone' => 'true',
				'add_button' => esc_html__( 'clonar', 'contact_addreses' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'contact_addreses' );
