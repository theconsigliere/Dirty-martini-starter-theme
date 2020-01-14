<section class="">

    <div class="carousel footer-slider"
        data-flickity='{ "imagesLoaded": true, "freeScroll": true, "prevNextButtons": false, "pageDots": false, "wrapAround": true, "lazyLoad": 2 }'>

        <?php if (have_rows('footer_slider_group')) : while (have_rows('footer_slider_group')) : the_row(); ?>

        <?php echo wp_get_attachment_image(get_sub_field('footer_image'), 'full');   ?>

        <?php endwhile; endif; ?>

    </div>

</section>