<section>


    <div class="full-width-section">
        <div class="container">

            <div class="title-section">
                <h2><?php the_sub_field('ce_s_title'); ?></h2>
            </div>

            <div class="row">

                <?php if (have_rows('ce_item')) : while (have_rows('ce_item')) : the_row(); ?>


                <div class="column">
                    <div class="ce-item">
                        <div class="ce-image">
                            <?php echo wp_get_attachment_image(get_sub_field('ce_image'), 'full'); ?>
                        </div>

                        <div class="text-card">
                            <h3><?php the_sub_field('ce_title'); ?></h3>
                            <p><?php the_sub_field('ce_desc'); ?></p>
                        </div>

                        <a href="<?php the_sub_field('ce_link'); ?>">
                            <a class='button button-black'>Find out more</button>
                            </a>

                    </div>
                </div>

                <?php endwhile;
        endif; ?>
            </div>


        </div>


    </div>



</section>