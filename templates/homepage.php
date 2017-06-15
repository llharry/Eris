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
<section class="homepage">
    <section class="heroBar">
        <div class="heroText">
            <h1>Eris</h1>
            <h2 class="subtitle">Satellite of Pluto.</h2>
        </div>
    </section>
    <section class="ctaBar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("homepage_cta_widget_area") ) : ?>
<?php endif;?>
    </section>
    <section class="contentBar">
        <div class="contentWidget">
            <?php the_content() ?>
        </div>
    </section>
    <section class="accoladesBar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("homepage_accolades_area") ) : ?>
<?php endif;?>
    </section>
</section>
<?php                     }
                } ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
