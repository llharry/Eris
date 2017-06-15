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
        <div class="heroText">
            <h1>Eris</h1>
            <h2 class="subtitle">Satellite of Pluto.</h2>
        </div>
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
