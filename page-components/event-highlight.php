<section>

    <div class="event-highlight-section container">

        <div class="highlight-text">

            <div class="event-highlight-title">
                <?php echo wp_get_attachment_image(get_sub_field('illustration_image'), 'full'); ?>
                <h2 class='white'><?php the_sub_field('highlight_title'); ?></h2>
            </div>

            <p class='white'><?php the_sub_field('highlight_desc'); ?></p>
        </div>

        <div class="highlight-image">
            <?php echo wp_get_attachment_image(get_sub_field('Event_image'), 'full'); ?>
        </div>

    </div>




</section>