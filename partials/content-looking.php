<section class="looking-section">

    <div class="looking-text-section">
        <h2><?php the_sub_field('l_title'); ?></h2>
    </div>

    <div class="l-section">

        <?php if (have_rows('l_item')) : while (have_rows('l_item')) : the_row(); ?>

        <div class="l-item">
            <div class="l-image">
                <?php echo wp_get_attachment_image(get_sub_field('l_image'), 'full'); ?>
            </div>

            <div class="text-card">
                <h3><?php the_sub_field('l_title'); ?></h3>
                <p><?php the_sub_field('l_desc'); ?></p>
            </div>

            <a href="<?php the_sub_field('l_link'); ?>">
                <button>Find out more --></button>
            </a>

        </div>

        <?php endwhile;
        endif; ?>


    </div>



</section>