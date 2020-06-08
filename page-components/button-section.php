<section class="full-width-section" style='background: <?php the_sub_field('button_colour'); ?>'>
    <div class="container">

        <div class="title-section button__title">
            <h1><?php the_sub_field('button_title'); ?></h1>

            <?php 

            $desc = get_sub_field('button_desc');

            if ( $desc ) { ?>

                    <p><?php the_sub_field('button_desc'); ?></p>

            <?php } ?>

        </div>


        <?php if (have_rows('button_button_group')) : ?>

            <div class="button-button">

                <?php while (have_rows('button_button_group')) : the_row(); ?>

                <?php 
                    $link = get_sub_field('button_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="<?php the_sub_field('button_style'); ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>


                <?php endwhile; ?>

            </div>

        <?php endif; ?>

  
        </div>

    </div>
</section>