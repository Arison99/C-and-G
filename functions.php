<?php
/**
 * C&G Theme Functions
 *
 * @package C&G
 */

function my_theme_enqueue_scripts() {
    // Enqueue Bootstrap CSS with fallback to CDN
    if (file_exists(get_stylesheet_directory() . '/assets/css/bootstrap.min.css')) {
        wp_enqueue_style(
            'bootstrap-css', 
            get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', 
            array(), 
            '5.3.0'
        );
    } else {
        wp_enqueue_style(
            'bootstrap-css', 
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', 
            array(), 
            '5.3.0'
        );
    }
    
    // Add Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );
    
    // Add Google Font - Bree Serif
    wp_enqueue_style(
        'google-font-bree-serif',
        'https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap',
        array(),
        '1.0'
    );

    // Add Google Font - Roboto
    wp_enqueue_style(
        'google-font-roboto',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap',
        array(),
        '1.0'
    );
    
    // Enqueue Bootstrap JS with fallback to CDN
    if (file_exists(get_stylesheet_directory() . '/assets/js/bootstrap.bundle.min.js')) {
        wp_enqueue_script(
            'bootstrap-js', 
            get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', 
            array('jquery'), // Ensure jQuery is a dependency
            '5.3.0', 
            true
        );
    } else {
        wp_enqueue_script(
            'bootstrap-js', 
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', 
            array('jquery'), 
            '5.3.0', 
            true
        );
    }
    
    // Add custom theme styles
    wp_enqueue_style( 'custom-navbar-style', get_template_directory_uri() . '/assets/css/custom.css', array('bootstrap-css'), '1.0', 'all' );

    wp_enqueue_style( 'carousel-wrapper', get_template_directory_uri() . '/assets/css/card-carousel.css', array('bootstrap-css'), '1.0', 'all' );

    wp_enqueue_style( 'container', get_template_directory_uri() . '/assets/css/about-us.css', array('bootstrap-css'), '1.0', 'all' );

    wp_enqueue_style( 'services-container', get_template_directory_uri() . '/assets/css/service-carousel.css', array('bootstrap-css'), '1.0', 'all' );

    wp_enqueue_style( 'why-choose-us-section', get_template_directory_uri() . '/assets/css/choose-us.css', array('bootstrap-css'), '1.0', 'all' );

    wp_enqueue_style( 'form-container', get_template_directory_uri() . '/assets/css/form.css', array('bootstrap-css'), '1.0', 'all' );

    wp_enqueue_style( 'footer-container', get_template_directory_uri() . '/assets/css/footer.css', array('bootstrap-css'), '1.0', 'all' );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function cg_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'cg-textdomain' ),
        'footer_menu' => __( 'Footer Menu', 'cg-textdomain' ),
    ) );
    
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action( 'after_setup_theme', 'cg_setup' );