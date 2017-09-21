<?php
// Gets header.php
get_header(); ?>
<?php /*get posts*/
if (have_posts()) {
    while (have_posts()) {the_post();
?>
<section class="content">

    <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="imageSection" style="background-image: url('<?php echo $image[0]; ?>')">
            <div class="title">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    <?php endif; ?>

    <section class="defaultPageContent">
        <div class="pageContent">
            <?php the_content();?>
        </div>
        <div class="pageSidebar">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("default_sidebar") ) : ?>
    <?php endif;?>
        </div>
    </section>
</section>
<?php                     }
                } ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
