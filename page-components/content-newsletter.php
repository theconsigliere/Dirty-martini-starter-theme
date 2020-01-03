<section class="newsletter-section">

    <div class="newsletter-image">
        <?php echo wp_get_attachment_image(get_sub_field('n_image'), 'full'); ?>


    </div>

    <div class="newsletter-right-section">

        <div class="newsletter-text">
            <h3><?php the_sub_field('n_title'); ?></h3>
            <p><?php the_sub_field('n_desc'); ?></p>

        </div>

        <div class="newsletter-form">
            <?php echo do_shortcode('[contact-form-7 id="16328" title="Footer Newsletter sign up"]'); ?>
        </div>

    </div>

</section>