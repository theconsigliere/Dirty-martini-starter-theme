<section class="marquee__section" style='background:<?php the_sub_field('marquee_colour');?>'>

    <div class="marquee__section_inner">
        <?php if (have_rows('Marquee_item')) : ?>

                <?php while (have_rows('Marquee_item')) : the_row(); ?>

                    <div class="marquee__item">
                        
                        <?php 
                        $link = get_sub_field('marquee_link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="marquee-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                        
                        <?php echo wp_get_attachment_image( get_sub_field('marquee_image'), 'full', '', array( 'class' => 'marquee_img skip-lazy')); ?>
                        <div class="marquee">
                            <div class="marquee__inner" aria-hidden="true">

                                <span><?php the_sub_field('marquee_title');?></span>
                                <span><?php the_sub_field('marquee_title');?></span>
                                <span><?php the_sub_field('marquee_title');?></span>
                                <span><?php the_sub_field('marquee_title');?></span>
                                <span><?php the_sub_field('marquee_title');?></span>
                                <span><?php the_sub_field('marquee_title');?></span>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

        <?php endif; ?>
    </div>
</section>