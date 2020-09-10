<?php 
function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'gallery',
        'title'             => __('Gallery'),
        'render_template'   => '/blocks/gallery.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'gallery', 'image' ),
        'mode' 	=> 'edit'
    ));

    acf_register_block_type(array(
        'name'              => 'body-content',
        'title'             => __('Body Content'),
        'render_template'   => '/blocks/body-content.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'body', 'image' ),
        'mode' 	=> 'edit'
    ));

   

    }
    
    // Check if function exists and hook into setup.
    if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
    }