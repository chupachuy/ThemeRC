<?php

    
add_post_type_support( 'page', 'excerpt' );

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( 'full' );
add_image_size( 'home-gallery', 416, 312 );
add_image_size( 'home-amenidades', 354, 236 );
add_image_size( 'home-modelos', 354, 236 );


// Register Custom Post Type
function images() {

    $labels = array(
        'name'                  => _x( 'Imagenes', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Imagen', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Imagenes', 'text_domain' ),
        'name_admin_bar'        => __( 'Imagenes', 'text_domain' ),
        'archives'              => __( 'Archivo de imagenes', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Agregar Imagen', 'text_domain' ),
        'new_item'              => __( 'Nueva Imagen', 'text_domain' ),
        'edit_item'             => __( 'Editar Imagen', 'text_domain' ),
        'update_item'           => __( 'Actualizar Imagen', 'text_domain' ),
        'view_item'             => __( 'Ver Imagen', 'text_domain' ),
        'view_items'            => __( 'Ver Imagenes', 'text_domain' ),
        'search_items'          => __( 'buscar Imagenes', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Imagen', 'text_domain' ),
        'description'           => __( 'Galeria de Imagenes', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'image', $args );

}
add_action( 'init', 'images', 0 );


// Register Custom Post Type AMENIDADES
function amenidades() {

    $labels = array(
        'name'                  => _x( 'Amenidades', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Amenidad', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Amenidades', 'text_domain' ),
        'name_admin_bar'        => __( 'Amenidades', 'text_domain' ),
        'archives'              => __( 'Archivo de Amenidades', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Agregar Amenidad', 'text_domain' ),
        'new_item'              => __( 'Nueva Amenidad', 'text_domain' ),
        'edit_item'             => __( 'Editar Amenidad', 'text_domain' ),
        'update_item'           => __( 'Actualizar Amenidad', 'text_domain' ),
        'view_item'             => __( 'Ver Amenidad', 'text_domain' ),
        'view_items'            => __( 'Ver Amenidades', 'text_domain' ),
        'search_items'          => __( 'buscar Amenidades', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Amenidad', 'text_domain' ),
        'description'           => __( 'Galeria de Amenidades', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'amenidad', $args );

}
add_action( 'init', 'amenidades', 0 );



/*** CUSTOM TYPES PARA ZONA COMERCIAL **/

function comerciales() {

    $labels = array(
        'name'                  => _x( 'Comerciales', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Comercial', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Comerciales', 'text_domain' ),
        'name_admin_bar'        => __( 'Comerciales', 'text_domain' ),
        'archives'              => __( 'Archivo de Comerciales', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Agregar Comercial', 'text_domain' ),
        'new_item'              => __( 'Nueva Comercial', 'text_domain' ),
        'edit_item'             => __( 'Editar Comercial', 'text_domain' ),
        'update_item'           => __( 'Actualizar Comercial', 'text_domain' ),
        'view_item'             => __( 'Ver Comercial', 'text_domain' ),
        'view_items'            => __( 'Ver Comerciales', 'text_domain' ),
        'search_items'          => __( 'buscar Comerciales', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Comercial', 'text_domain' ),
        'description'           => __( 'Galeria de Comerciales', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'comercial', $args );

}
add_action( 'init', 'comerciales', 0 );

// Register Custom Post Type MODELOS
function modelos() {

    $labels = array(
        'name'                  => _x( 'modelos', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Modelo', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'modelos', 'text_domain' ),
        'name_admin_bar'        => __( 'modelos', 'text_domain' ),
        'archives'              => __( 'Archivo de modelos', 'text_domain' ),
        'attributes'            => __( 'Modelo Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Modelo:', 'text_domain' ),
        'all_items'             => __( 'All Modelos', 'text_domain' ),
        'add_new_item'          => __( 'Add New Modelo', 'text_domain' ),
        'add_new'               => __( 'Agregar Modelo', 'text_domain' ),
        'new_item'              => __( 'Nueva Modelo', 'text_domain' ),
        'edit_item'             => __( 'Editar Modelo', 'text_domain' ),
        'update_item'           => __( 'Actualizar Modelo', 'text_domain' ),
        'view_item'             => __( 'Ver Modelo', 'text_domain' ),
        'view_items'            => __( 'Ver modelos', 'text_domain' ),
        'search_items'          => __( 'buscar modelos', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Modelos list', 'text_domain' ),
        'items_list_navigation' => __( 'Modelos list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Modelo', 'text_domain' ),
        'description'           => __( 'Galeria de modelos', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'modelo', $args );

}
add_action( 'init', 'modelos', 0 );


// Register Custom Post Type MODELOS
function californias() {

    $labels = array(
        'name'                  => _x( 'californias', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'California', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'californias', 'text_domain' ),
        'name_admin_bar'        => __( 'californias', 'text_domain' ),
        'archives'              => __( 'Archivo de californias', 'text_domain' ),
        'attributes'            => __( 'California Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent California:', 'text_domain' ),
        'all_items'             => __( 'All Californias', 'text_domain' ),
        'add_new_item'          => __( 'Add New California', 'text_domain' ),
        'add_new'               => __( 'Agregar California', 'text_domain' ),
        'new_item'              => __( 'Nueva California', 'text_domain' ),
        'edit_item'             => __( 'Editar California', 'text_domain' ),
        'update_item'           => __( 'Actualizar California', 'text_domain' ),
        'view_item'             => __( 'Ver California', 'text_domain' ),
        'view_items'            => __( 'Ver californias', 'text_domain' ),
        'search_items'          => __( 'buscar californias', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Californias list', 'text_domain' ),
        'items_list_navigation' => __( 'Californias list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'California', 'text_domain' ),
        'description'           => __( 'Galeria de californias', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'california', $args );

}
add_action( 'init', 'californias', 0 );

// Register Custom Post Type SLIDERS
function sliders() {

    $labels = array(
        'name'                  => _x( 'sliders', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'sliders', 'text_domain' ),
        'name_admin_bar'        => __( 'sliders', 'text_domain' ),
        'archives'              => __( 'Archivo de sliders', 'text_domain' ),
        'attributes'            => __( 'Slider Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Slider:', 'text_domain' ),
        'all_items'             => __( 'All Sliders', 'text_domain' ),
        'add_new_item'          => __( 'Add New Slider', 'text_domain' ),
        'add_new'               => __( 'Agregar Slider', 'text_domain' ),
        'new_item'              => __( 'Nuevo Slider', 'text_domain' ),
        'edit_item'             => __( 'Editar Slider', 'text_domain' ),
        'update_item'           => __( 'Actualizar Slider', 'text_domain' ),
        'view_item'             => __( 'Ver Slider', 'text_domain' ),
        'view_items'            => __( 'Ver sliders', 'text_domain' ),
        'search_items'          => __( 'buscar sliders', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Sliders list', 'text_domain' ),
        'items_list_navigation' => __( 'Sliders list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Slider', 'text_domain' ),
        'description'           => __( 'Galeria de sliders', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'slider', $args );

}
add_action( 'init', 'sliders', 0 );


?>