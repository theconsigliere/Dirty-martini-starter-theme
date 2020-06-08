<?php

// check if the repeater field has rows of data
if( have_rows('socials') ): ?>

    <div class="header_social_group">
        
        <?php while ( have_rows('socials') ) : the_row(); ?>

            <div class="social_item">

            <?php
                $link = get_sub_field('social_link');

                if( $link ): 
                    $link_url = $link['url'];  ?>
                    <a href="<?php echo esc_url( $link_url ); ?>">
                        <div class="social_logo">
                            <?php the_sub_field('social_logo'); ?>
                        </div>
                    </a>
                <?php endif; ?>
            </div>


        <?php endwhile; ?>
        
    </div>

<?php endif; ?>