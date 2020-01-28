<section>


    <div class="full-width-section" style='background-color:<?php get_sub_field('background_color'); ?>'>
        <div class="container grid-two-up-one-down">

            <?php if( have_rows('grid_item_left') ): while( have_rows('grid_item_left') ): the_row(); ?>

            <div class="grid-square grid-left">
                <?php echo wp_get_attachment_image(get_sub_field('grid_background_image'), 'full'); ?>
                <div class="grid-item-group">
                    <div class="grid-item-illustration">
                        <?php echo wp_get_attachment_image(get_sub_field('grid_item_image'), 'full'); ?>
                    </div>
                    <h2 class='white'><?php the_sub_field('grid_item_title'); ?></h2>
                    <a href="" class="button">More Info</a>

                </div>

            </div>

            <?php endwhile; endif; ?>


            <?php if( have_rows('grid_item_right') ): while( have_rows('grid_item_right') ): the_row(); ?>

            <div class="grid-square grid-right">
                <?php echo wp_get_attachment_image(get_sub_field('grid_background_image'), 'full'); ?>
                <div class="grid-item-group">
                    <div class="grid-item-illustration">
                        <?php echo wp_get_attachment_image(get_sub_field('grid_item_image'), 'full'); ?>
                    </div>
                    <h2 class='white'><?php the_sub_field('grid_item_title'); ?></h2>
                    <a href="" class="button">More Info</a>

                </div>

            </div>

            <?php endwhile; endif; ?>


            <?php if( have_rows('grid_item_bottom') ): while( have_rows('grid_item_bottom') ): the_row(); ?>

            <div class="grid-bottom">
                <?php echo wp_get_attachment_image(get_sub_field('grid_background_image'), 'full'); ?>
                <div class="grid-item-group">
                    <div class="grid-item-illustration">
                        <?php echo wp_get_attachment_image(get_sub_field('grid_item_image'), 'full'); ?>
                    </div>
                    <h2 class='white'><?php the_sub_field('grid_item_title'); ?></h2>
                    <a href="" class="button">More Info</a>


                </div>

            </div>


            <?php endwhile; endif; ?>


        </div>
    </div>



</section>