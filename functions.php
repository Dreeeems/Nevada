<?php
/**
 * Theme functions
 * 
 * @package Nevada
 */

if(! defined('Nevada_DIR_PATH')){
    define('Nevada_DIR_PATH',untrailingslashit( get_template_directory(  ) ));
}



 require_once Nevada_DIR_PATH . '/include/helpers/autoloader.php';


function nevada_enqueue_scripts() {


wp_register_style(
        'style-css',
        get_template_directory_uri() . '/style.css',  
        [],  
        filemtime(get_template_directory() . '/style.css'),  
        'all'  
    );

    wp_register_style(
        'bootstrap-css',
        get_template_directory_uri() . '/assets/src/lib/css/bootstrap.min.css',  
        [],  
        false,  
        'all'  
    );
    


    wp_register_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',  
        [],  
        filemtime(get_template_directory() . '/assets/js/main.js'), 
        true  
    );
      wp_register_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/src/lib/js/bootstrap.js',  
        ['jquery'],  
        false, 
        true  
    );

    wp_enqueue_style( 'style-css' );
    wp_enqueue_style( 'bootstrap-css' );
    wp_enqueue_script('main-js');
     wp_enqueue_script('bootstrap-js');

}

add_action('wp_enqueue_scripts', 'nevada_enqueue_scripts');
?>
