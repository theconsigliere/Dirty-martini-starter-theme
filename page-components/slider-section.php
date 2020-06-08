<section class='slider__section'>
    <div class="container-wrap">

        <?php if (have_rows('slider_group')) : ?>

            <div class="swiper-container">
                <div class="swiper-wrapper">
                   
                        <?php while (have_rows('slider_group')) : the_row(); ?>
                            <div class="swiper-slide">

                                <?php echo wp_get_attachment_image(get_sub_field('s_image'), 'full');   ?>

                                <div class="swiper-slide__content">
                                    <h1 class='white'><?php the_sub_field('s_title');?></h1>
                                </div>
                  
                            </div>
                        <?php endwhile; ?>
                   
                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

              
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

  <!-- If we need navigation buttons 
                 If we need scrollbar 
                <div class="swiper-scrollbar"></div> -->
              

            </div>

        <?php endif; ?>

    </div>


</section>


