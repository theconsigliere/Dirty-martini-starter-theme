<section>


    <div class="full-width-section">
        <div class="container grid-one-one">

            <?php if( have_rows('grid_item_one') ): while( have_rows('grid_item_one') ): the_row(); ?>

            <div class="grid-square grid-one">

                <div class="grid-item-group">
                    <div class="grid-item-illustration">
                        <?php echo wp_get_attachment_image(get_sub_field('grid_item_image'), 'full'); ?>
                    </div>
                    <h2><?php the_sub_field('grid_item_title'); ?></h2>
                    <p><?php the_sub_field('grid_item_desc'); ?></p>
                    <a href="" class="button">More Info</a>

                </div>

            </div>

            <?php endwhile; endif; ?>


            <?php if( have_rows('grid_item_two') ): while( have_rows('grid_item_two') ): the_row(); ?>

            <div class="grid-square grid-two">

                <div class="grid-item-group">
                    <div class="grid-item-illustration">
                        <?php echo wp_get_attachment_image(get_sub_field('grid_item_image'), 'full'); ?>
                    </div>
                    <h2><?php the_sub_field('grid_item_title'); ?></h2>
                    <p><?php the_sub_field('grid_item_desc'); ?></p>
                    <a href="" class="button">More Info</a>
                </div>

            </div>

            <?php endwhile; endif; ?>



        </div>
    </div>



</section>