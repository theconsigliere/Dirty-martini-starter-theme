<section class="container-wrap full-width-section">

    <div class="image-side sticky">
        <?php echo wp_get_attachment_image(get_sub_field('r_image'), 'full'); ?>


    </div>

    <div class="text-side">
        <h2><?php the_sub_field('r_title'); ?></h2>
        <p><?php the_sub_field('r_desc'); ?></p>

    </div>


</section>