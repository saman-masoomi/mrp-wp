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

?>