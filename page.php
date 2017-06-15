<?php
// Gets header.php
get_header(); ?>
<?php /*get posts*/
if (have_posts()) {
    while (have_posts()) {the_post();
?>
<?php /*
<div class="page_default">
    <div class="titleBar">
        <div class="siteWidth">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
    <div class="siteWidth">
        <div class="width3_2 pageContent">
            <?php the_content();?>
        </div>
        <div class="width3 pageSidebar">
            <?php if ( is_active_sidebar( 'page_sidebar' ) ) : ?>
            <div class="width1 widget-area" role="complementary">
                <?php dynamic_sidebar( 'page_sidebar' ); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
*/?>
<section class="content">
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
