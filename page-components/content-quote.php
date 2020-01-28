<section style='background-color:<?php the_sub_field('background_colour'); ?>'>

    <div class="quote-section container">

        <div class="quote-image">
            <?php echo wp_get_attachment_image(get_sub_field('quote_image'), 'full'); ?>
        </div>

        <div class="quote-text">
            <h2 class='white'><?php the_sub_field('quote_title'); ?></h2>
            <p class='white'><?php the_sub_field('quote_desc'); ?></p>
        </div>


    </div>


</section>