<section>
    <div class="container-wrap">

        <?php if (have_rows('slider_group')) : ?>

        <div class="l-section">

            <div class="carousel"
                data-flickity='{ "autoPlay": 1500, "pauseAutoPlayOnHover": false, "prevNextButtons": false, "pageDots": false, "wrapAround": true, "lazyLoad": 2 }'>

                <?php while (have_rows('slider_group')) : the_row(); ?>

                <div class="carousel-cell">
                    <?php echo wp_get_attachment_image(get_sub_field('s_image'), 'full');   ?>
                    <h5><?php the_sub_field('s_title');?></h5>
                </div>

                <?php endwhile; ?>

            </div>


        </div>
        <?php endif; ?>

    </div>


</section>