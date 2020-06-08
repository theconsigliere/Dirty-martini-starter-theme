<section class="full-width-section">

    <div class="container">

        <div class='list__column_group'>

            <?php if (have_rows('list_column')) : ?>

                
                    
                    <?php while (have_rows('list_column')) : the_row(); 

                        // Title Text Section
                        if (get_row_layout() == 'title_text_section') : ?>

                            <div class="list__column">

                                <div class="list__title_text">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>

                            </div>


                        <?php // List Section
                        elseif (get_row_layout() == 'list_list_section') : ?>

                            <div class="list__column">

                            
                                    <h3 class='list__master_title'><?php the_sub_field('list_list_title'); ?></h3>

                                    <?php if (have_rows('list_item')) : while (have_rows('list_item')) : the_row(); ?>

                                    <div class="list__item">

                                        <div class="list__item_title">
                                            <div class="list__item_span">
                                                <span class="list__left"></span>                                          
                                                <span class="list__right"></span>   
                                            </div>
                                            <h6><?php the_sub_field('list_title'); ?></h6>
                                        </div>

                                        <div class="list__item_desc">
                                            <p><?php the_sub_field('list_description'); ?></p>
                                        </div>

                                    </div>    

                                    <?php endwhile; endif; ?>


                            </div>    


                        <?php endif; ?>

                    <?php endwhile; ?>
            
            
            <?php endif; ?>

        </div>

    </div>

</section>