<section>

    <?php 
$link = get_sub_field('highlight_link');
if( $link ): 
    $link_url = $link['url'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">

        <div class="highlight-section container">

            <div class="highlight-image">
                <?php echo wp_get_attachment_image(get_sub_field('highlight_image'), 'full'); ?>
            </div>

            <div class="highlight-text">
                <h2><?php the_sub_field('highlight_title'); ?></h2>
                <p><?php the_sub_field('highlight_desc'); ?></p>
            </div>


        </div>


    </a>
    <?php endif; ?>

</section>