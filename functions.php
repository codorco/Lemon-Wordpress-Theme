<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'portfolio-thumb', 750, 500, false );
add_theme_support( 'align-wide' );


function limao_enqueue_assets() {
    
    // --- ESTILOS ---
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans:400,400i,700,700i,800,800i&display=swap', array(), null);
    wp_enqueue_style('bootstrap-grid', get_theme_file_uri('/css/bootstrap-grid.min.css'), array(), null);
    wp_enqueue_style('gutenberg', get_theme_file_uri('/css/gutenberg-blocks.css'), array('bootstrap-grid'), wp_get_theme()->get('Version'));
    wp_enqueue_style('main-style', get_theme_file_uri('/css/main.min.css'), array('bootstrap-grid', 'gutenberg', 'google-fonts'), wp_get_theme()->get('Version'));
    wp_enqueue_style('style', get_stylesheet_uri(), array('main-style'), wp_get_theme()->get('Version'));
	wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null);


    // --- SCRIPTS GLOBAIS ---
    wp_enqueue_script('ionicons-esm', 'https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js', array(), null, false);
    wp_enqueue_script('ionicons', 'https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js', array(), null, false);

    $deps = array('jquery');

    // --- HOME ---
    if ( is_home() || is_front_page() ) {
        wp_enqueue_script('waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js', array(), null, true);
        wp_enqueue_script('waypoints-inview', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js', array('waypoints'), null, true);
        wp_enqueue_script('anime', get_theme_file_uri('/js/anime.min.js'), array(), null, true);
        wp_enqueue_script('slider', get_theme_file_uri('/js/slider.min.js'), array(), null, true);
        
        array_push($deps, 'waypoints', 'waypoints-inview', 'anime', 'slider');
    } 

    // --- PÁGINAS ---
    if ( is_page('portfolio') || is_page('sobre') ) {
        wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
        wp_enqueue_script('waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js', array(), null, true);
        
        array_push($deps, 'waypoints');
    }

    // --- SINGLE PROJECT ---
    if ( is_singular('project') ) {
		wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
		wp_enqueue_script('anime', get_theme_file_uri('/js/anime.min.js'), array(), null, true);
        wp_enqueue_script('waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js', array(), null, true);
        wp_enqueue_script('waypoints-inview', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js', array('waypoints'), null, true);
        wp_enqueue_script('rellax', 'https://cdnjs.cloudflare.com/ajax/libs/rellax/1.10.0/rellax.min.js', array(), null, true);
        wp_enqueue_script('gallery', get_theme_file_uri('/js/gallery.min.js'), array('anime'), null, true);
        
        array_push($deps, 'waypoints', 'waypoints-inview', 'rellax', 'gallery');
    }

    // --- MAIN SCRIPT ---
    wp_enqueue_script('main-script', get_theme_file_uri('/js/main.min.js'), $deps, wp_get_theme()->get('Version'), true);
}
add_action( 'wp_enqueue_scripts', 'limao_enqueue_assets' );

	//--------------------

function register_my_menus() {
  register_nav_menus(
    array(
      'desktop-menu' => __( 'Desktop Menu' ),
      'mobile-menu' => __( 'Mobile Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );



if ( ! function_exists( 'jl_get_field' ) ) {
	function jl_get_field( $field_name ) {
		if ( function_exists( 'get_field' ) ) {
			return get_field( $field_name );
		}
		return '';
	}
}

if ( ! function_exists( 'jl_the_field' ) ) {
	function jl_the_field( $field_name ) {
		echo jl_get_field( $field_name );
	}
}


// Register Custom Post Type
function cpt_project() {

	$labels = array(
		'name'                    => _x( 'Portfolio', 'Post Type General Name', 'Post de Portfolio' ),
		'singular_name'           => _x( 'Portfolio', 'Post Type Singular Name', 'Post de Portfolio' ),
		'menu_name'               => __( 'Portfolio', 'Post de Portfolio' ),
		'name_admin_bar'          => __( 'Portfolio', 'Post de Portfolio' ),
		'archives'                => __( 'Item Archives', 'Post de Portfolio' ),
		'attributes'              => __( 'Item Attributes', 'Post de Portfolio' ),
		'parent_item_colon'       => __( 'Parent Portfolio:', 'Post de Portfolio' ),
		'all_items'               => __( 'All Portfolio', 'Post de Portfolio' ),
		'add_new_item'            => __( 'Add New Portfolio', 'Post de Portfolio' ),
		'add_new'                 => __( 'Add New', 'Post de Portfolio' ),
		'new_item'                => __( 'New Portfolio', 'Post de Portfolio' ),
		'edit_item'               => __( 'Edit Portfolio', 'Post de Portfolio' ),
		'update_item'             => __( 'Update Portfolio', 'Post de Portfolio' ),
		'view_item'               => __( 'View Portfolio', 'Post de Portfolio' ),
		'view_items'              => __( 'View Items', 'Post de Portfolio' ),
		'search_items'            => __( 'Search Portfolio', 'Post de Portfolio' ),
		'not_found'               => __( 'Not found', 'Post de Portfolio' ),
		'not_found_in_trash'      => __( 'Not found in Trash', 'Post de Portfolio' ),
		'featured_image'          => __( 'Featured Image', 'Post de Portfolio' ),
		'set_featured_image'      => __( 'Set featured image', 'Post de Portfolio' ),
		'remove_featured_image'   => __( 'Remove featured image', 'Post de Portfolio' ),
		'use_featured_image'      => __( 'Use as featured image', 'Post de Portfolio' ),
		'insert_into_item'        => __( 'Insert into item', 'Post de Portfolio' ),
		'uploaded_to_this_item'   => __( 'Uploaded to this item', 'Post de Portfolio' ),
		'items_list'              => __( 'Items list', 'Post de Portfolio' ),
		'items_list_navigation'   => __( 'Items list navigation', 'Post de Portfolio' ),
		'filter_items_list'       => __( 'Filter items list', 'Post de Portfolio' ),
	);
	$args = array(
		'label'                   => 'Portfolio',
		'description'             => 'Postagem de Portfolio',
		'labels'                  => $labels,
		'supports'                => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' ),
		'taxonomies'              => array( 'category' ),
		'hierarchical'            => false,
		'public'                  => true,
		'show_ui'                 => true,
		'show_in_menu'            => true,
		'menu_position'           => 5,
		'menu_icon'               => 'dashicons-welcome-view-site',
		'show_in_admin_bar'       => true,
		'show_in_nav_menus'       => true,
		'can_export'              => true,
		'has_archive'             => true,
		'exclude_from_search'     => false,
		'publicly_queryable'      => true,
		'query_var'               => true,
		'rewrite'                 => array( 'slug' => 'project', 'with_front' => true, 'pages' => true, 'feeds' => false ),
		'capability_type'         => 'page',
		'show_in_rest'            => true,
		'rest_base'               => 'project',
		'rest_controller_class'   => 'WP_REST_Posts_Controller',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'cpt_project', 0 );

function limao_block_styles() {
    // Garante que a biblioteca base esteja na fila
    wp_enqueue_style( 'wp-block-library' );

    // Adiciona o seu CSS customizado logo após a biblioteca
    wp_add_inline_style( 'wp-block-library', '
        .wp-block-columns {
            display: flex !important;
            flex-wrap: wrap !important;
        }
        .wp-block-column {
            flex: 1 !important;
            margin-right: 1em !important;
        }
        .wp-block-column:last-child {
            margin-right: 0 !important;
        }
    ' );
}
add_action( 'wp_enqueue_scripts', 'limao_block_styles' );