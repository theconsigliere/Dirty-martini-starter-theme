<div id='hero-textside-imageside'>

    <?php

    // COLUMN REPEATER
    if( have_rows('hero_column') ): ?>

    
        <?php while ( have_rows('hero_column') ) : the_row(); ?>

            <div class="hero__column">
                

        <?php // FLEXIBLE CONTENT IN COLUMNS ?>

            <?php if (have_rows('hero_item')) : while (have_rows('hero_item')) : the_row();

                        // Title Section
                        if (get_row_layout() == 'hero_title_section') : ?>

                            <div class="hero__text">
                                <div class="hero__text_inner">

                                    <?php if (get_sub_field('hero_sub_title')) { ?>
                                    <h6 class='uppercase font-bold-title sub_title'><span class='hero-line'></span><?php the_sub_field('hero_sub_title'); ?></h6>
                                    <?php } ?>
    
                                    <h1><?php the_sub_field('hero_title'); ?></h1>
                                    <!-- <div class="underline"></div> -->
                                
                                    <?php if (get_sub_field('hero_desc')) { ?>
                                    <p class='full-width__desc'><?php the_sub_field('hero_desc'); ?></p>
                                    <?php } ?>


                                    <?php 
                                    $link = get_sub_field('hero_button');
                                    if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                        <?php

                        //  Image Section
                        elseif (get_row_layout() == 'hero_image_section') : ?>

                            <?php echo wp_get_attachment_image( get_sub_field('hero_image'), 'full'); ?>
                    

                        <?php endif;
        
                    endwhile; endif; ?>

            </div>
     

        <?php  endwhile;  endif; ?>


</div>