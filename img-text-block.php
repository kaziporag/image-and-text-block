<?php
/**
 * Plugin Name: Image and Text Block
 */

function image_text_block_register() {
    wp_register_script(
        'image-text-block',
        plugins_url( 'src/index.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-editor' )
    );

    wp_register_style(
        'image-text-block-style',
        plugins_url( 'style.css', __FILE__ )
    );

    register_block_type( 'my-plugin/image-text-block', array(
        'editor_script' => 'image-text-block',
        'style'         => 'image-text-block-style',
    ) );
}
add_action( 'init', 'image_text_block_register' );
