<?php
// Gets header.php
get_header(); ?>
<?php /*get posts*/
if (have_posts()) {
    while (have_posts()) {the_post();
?>
<section class="content defaultPageContent">
    <div class="title">
        <h1><?php the_title() ?></h1>
    </div>
    <div class="pageContent">
        <?php the_content();?>
    </div>
</section>
<?php                     }
                } ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
