<section class="text-sections">

    <div class="text-image">
        <?php echo wp_get_attachment_image(get_sub_field('ts_image'), 'full'); ?>
    </div>

    <div class="text-text">
        <?php the_sub_field('ts_text'); ?>
    </div>

</section>