    <section class="footerBar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_widget_area") ) : ?>
<?php endif;?>
    </section>
    <section class="copyrightBar">
        <p>
            Created & Maintained by <a href="https://charonwebservices.co.uk">Charon Web Services</a>
        </p>
    </section>
<?php wp_footer();?>
</body>
