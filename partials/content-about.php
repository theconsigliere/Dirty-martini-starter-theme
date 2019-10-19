<section class="we-are-section">

    <div class="we-are-image">
        <?php echo wp_get_attachment_image(get_sub_field('r_image'), 'full'); ?>


    </div>

    <div class="we-are-text">
        <h3><?php the_sub_field('r_title'); ?></h3>
        <p><?php the_sub_field('r_desc'); ?></p>

    </div>


</section>