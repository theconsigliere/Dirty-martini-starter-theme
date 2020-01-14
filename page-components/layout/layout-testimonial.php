<section class="column-section" style='background-color: <?php the_sub_field('background_color'); ?>'>

    <h2><?php the_sub_field('testimonial_title'); ?></h2>

    <div class="container">

        <?php if (have_rows('testimonial_group')) : ?>

        <div class="l-section">

            <div class="carousel"
                data-flickity='{ "autoPlay": 3000, "pauseAutoPlayOnHover": true, "prevNextButtons": false, "pageDots": false, "wrapAround": true, "lazyLoad": 2 }'>

                <?php while (have_rows('testimonial_group')) : the_row(); ?>

                <div class="carousel-cell">
                    <p><?php the_sub_field('testimonial_item_desc');?></p>
                    <h5><?php the_sub_field('testimonial_item_title');?></h5>
                </div>

                <?php endwhile; ?>

            </div>

        </div>
        <?php endif; ?>


    </div>


</section>