<section class="image__section" style="background: <?php the_sub_field('background_colour'); ?>">

    <div class="container">
        
        <div class="row">
            <?php if (have_rows('image_image_group')) : ?>
           
                    <?php while (have_rows('image_image_group')) : the_row(); ?>

                        <?php if (have_rows('image_item')) :   while (have_rows('image_item')) : the_row();

                            // Text Section
                            if (get_row_layout() == 'text_section') : ?>

                            <div class="image__item">
                                <div class="image__text">
                                    <div class="image__text_inner">

    
                                        <h1><?php the_sub_field('image_title'); ?></h1>
                                        <!-- <div class="underline"></div> -->
                                    
                                        <?php if (get_sub_field('desc')) { ?>
                                        <p class='full-width__desc'><?php the_sub_field('desc'); ?></p>
                                        <?php } ?>


                                        <?php 
                                        $link = get_sub_field('button');
                                        if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                           </div>
                                
                            <?php

                            //  Image Section
                            elseif (get_row_layout() == 'image_section') : ?>

                                <div class="image__item_image">
                                    <?php echo wp_get_attachment_image( get_sub_field('image_image'), 'full'); ?>
                              

                                    <?php 
                                    $imagedesc = get_sub_field('image_image_title');

                                    if ( $imagedesc ) { ?>

                                    <div class="image__item_desc">

                                            
                                            <h4><?php the_sub_field('image_image_title'); ?></h4>


                                        <?php if ( get_sub_field('image_image_desc') ) { ?>
                                            
                                            <p><?php the_sub_field('image_image_desc'); ?></p>

                                        <?php  } ?>
                                            
                                    </div>

                                    <?php  } ?>
                                </div>


                            <?php endif; endwhile; ?>
                            
                            
                            <?php endif; ?>



                    <?php endwhile; ?>

              

            <?php endif; ?>
        </div>
    </div>

</section>
