<section class="author__section">

        <div class="author__section_inner">

            <div class="author__item">
            
                    <?php 

                    $image = get_sub_field('author_image');

                    if ( $image) { ?>

                    <div class="author__image">

                        <?php echo wp_get_attachment_image($image, 'full'); ?>

                    </div>

                    <?php } ?>


                <div class="author__desc">

                <p class='uppercase'><?php echo esc_html( 'Written By' ); ?></p>
                    <h4><?php the_sub_field('author_name'); ?></h4>
                    <h6><?php the_sub_field('author_date'); ?></h6>

                </div>
            </div>

            <div class="author__categories">

                <?php 
                $terms = get_sub_field('author_category');
                if( $terms ): ?>
                   
                    <?php foreach( $terms as $term ): ?>
                        <a class='block-button' href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
                    <?php endforeach; ?>

                
                <?php endif; ?>

            </div>
            

        </div>
  


</section>