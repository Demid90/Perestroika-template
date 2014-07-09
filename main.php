<?php

/*

 Template Name: Main

*/

get_header(); ?>

<?php dynamic_sidebar( 'News' ); ?>


<h1 class="red-h">Идеи строительства</h1>

<?php 
    echo do_shortcode("[metaslider id=41]"); 
?>

<?php dynamic_sidebar( 'Полезные статьи' ); ?>

<?php get_footer(); ?>