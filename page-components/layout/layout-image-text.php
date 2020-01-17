<section class="container-wrap full-width-section">

    <div class="image-side sticky">
        <?php echo wp_get_attachment_image(get_sub_field('r_image'), 'full'); ?>


    </div>

    <div class="text-side">
        <h2><?php the_sub_field('r_title'); ?></h2>
        <p><?php the_sub_field('r_desc'); ?></p>

        <?php $link = get_sub_field('r_button');

        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

        <a class="button" href="<?php echo esc_url( $link_url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

        <?php endif; ?>

    </div>


</section>