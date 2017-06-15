<?php
/**
 * Template Name: Homepage - Default
 */
?>
<?php
// Gets header.php
get_header(); ?>
<?php /*get posts*/
if (have_posts()) {
    while (have_posts()) {the_post();
?>
<div class="homepage">
    <section class="heroBar">

    </section>
    <section class="ctaBar">

    </section>
    <section class="contentBar">

    </section>
</div>
<?php                     }
                } ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
