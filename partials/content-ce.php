<section class="candidates-employers-section">

    <div class="candidates-employers-text-section">
        <h2><?php the_sub_field('ce_s_title'); ?></h2>
        <p><?php the_sub_field('ce_s_desc'); ?></p>
    </div>

    <div class="ce-section">

        <?php if (have_rows('ce_item')) : while (have_rows('ce_item')) : the_row(); ?>

        <div class="ce-item">
            <div class="ce-image">
                <?php echo wp_get_attachment_image(get_sub_field('ce_image'), 'full'); ?>
            </div>

            <div class="text-card">
                <h3><?php the_sub_field('ce_title'); ?></h3>
                <p><?php the_sub_field('ce_desc'); ?></p>
            </div>

            <a href="<?php the_sub_field('ce_link'); ?>">
                <button>Find out more --></button>
            </a>

        </div>

        <?php endwhile;
        endif; ?>


    </div>



</section>