<section class="menu-section-row">

    <?php if (have_rows('footer_nav')) : while (have_rows('footer_nav')) : the_row(); 

        $link = get_sub_field('menu_item');

            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self'; ?>

    <a class="button" href="<?php echo esc_url( $link_url ); ?>"
        target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

    <?php endif; ?>

    <?php endwhile; endif; ?>


</section>