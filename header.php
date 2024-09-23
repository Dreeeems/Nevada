
<?php
/**
 * Header template
 * 
 * @package Aquila
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?>">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php if(function_exists('wp_body_class()')){
    wp_body_class();
} ; ?>>
    
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="header" class="header" role="banner">
        <?php get_template_part('template_parts/header/nav'); ?>
    </header>
    <div id="content" class="site-content">

    </div>

