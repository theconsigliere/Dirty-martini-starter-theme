<section class="menu-section-row">

    <?php if (have_rows('socials_group')) : while (have_rows('socials_group')) : the_row(); 

        $link = get_sub_field('social_title');

            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self'; ?>

    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        <div class="social-item">
            <div class="social-logo"><?php the_sub_field('social_logo'); ?></div>
            <h6><?php echo esc_html( $link_title ); ?></h6>
        </div>
    </a>

    <?php endif; ?>

    <?php endwhile; endif; ?>


</section>