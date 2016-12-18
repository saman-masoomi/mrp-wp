<?php
if (function_exists('add_theme_support')) {
add_theme_support( 'post-thumbnails' );
}

add_action( 'init', 'create_post_type' );
    function create_post_type() {
            register_post_type( 'phonebook',
                    array(
                            'labels' => array(
                                    'name' => __( 'دفتر تلفن' ),
                                    'singular_name' => __( 'phonebook' )
                            ),
                    'public' => true,
                    'has_archive' => true
                    )
            );
}

    global $meta_boxes;
    $meta_boxes   = array();
    $prefix = 'rw_';

    $meta_boxes[] = array(
            'id'         => 'personal',
            'title'      => __( 'phonebook text box', 'textdomain' ),
            'post_types' => 'phonebook',
            'fields'     => array(

                array(
                    'id'   => 'name',
                    'name' => __( 'name', 'textdomain' ),
                    'desc'  => 'Format: First Last',
                    'type' => 'text',

                ),
                array(
                    'id'   => 'unit',
                    'name' => __( 'unit', 'textdomain' ),
                    'type' => 'text',
                ),

            )
        );
        
function YOURPREFIX_register_meta_boxes() {
    global $meta_boxes;
    if ( ! class_exists( 'RW_Meta_Box' ) )
        return;
    foreach ( $meta_boxes as $meta_box ) {
        new RW_Meta_Box( $meta_box );
    }
}
add_action( 'admin_init', 'YOURPREFIX_register_meta_boxes' );
    

?>