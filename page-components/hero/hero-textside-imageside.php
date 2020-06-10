<div id='hero-textside-imageside'>

    <?php

    // COLUMN REPEATER
    if( have_rows('hero_column') ): ?>

    
        <?php while ( have_rows('hero_column') ) : the_row(); ?>

           
                

        <?php // FLEXIBLE CONTENT IN COLUMNS ?>

            <?php if (have_rows('hero_item')) : while (have_rows('hero_item')) : the_row();

                        // Title Section
                        if (get_row_layout() == 'hero_title_section') : ?>

                            <div class="hero__column">

                                <div class="hero__text">
                                    <div class="hero__text_inner">

                                        <?php if (get_sub_field('hero_sub_title')) { ?>
                                        <h6 class='js_textside__sub_title uppercase font-bold-title sub_title'><span class='hero-line'></span><?php the_sub_field('hero_sub_title'); ?></h6>
                                        <?php } ?>
        
                                        <h1 class='js_textside__title'><?php the_sub_field('hero_title'); ?></h1>
                                        <!-- <div class="underline"></div> -->
                                    
                                        <?php if (get_sub_field('hero_desc')) { ?>
                                        <p class='full-width__desc js_textside__desc'><?php the_sub_field('hero_desc'); ?></p>
                                        <?php } ?>
                                       
                            
                                        <?php 
                                        $link = get_sub_field('hero_button');
                                        if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <a class="button js_textside__button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>
                            
                        <?php

                        //  Image Section
                        elseif (get_row_layout() == 'hero_image_section') : ?>

                        <div class="hero__column js_hero__imageside">

                            <?php echo wp_get_attachment_image( get_sub_field('hero_image'), 'full', '', array('class'=>'js_hero__imageside_image')); ?>
                        </div>

                        <?php endif;
        
                    endwhile; endif; ?>

            
     

        <?php  endwhile;  endif; ?>


</div>