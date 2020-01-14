<section class="full-width-section" style='background-color: <?php the_sub_field('background_colour'); ?>'>

    <div class="container">
        <div class="row">
            <div class="column column-40 column-center">
                <h3><?php the_sub_field('form_title'); ?></h3>
                <p><?php the_sub_field('form_desc'); ?></p>
            </div>
            <div class="column column-60 column-center">
                <?php 
              $shortcode = get_sub_field('form_shortcode');
              echo do_shortcode($shortcode); ?>

            </div>
        </div>


    </div>

</section>