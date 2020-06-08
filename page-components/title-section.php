<section class="full-width-section">

  
        <div class="title-section <?php the_sub_field('position'); ?>">

            <div class="title_title__section">
                <h1><?php the_sub_field('title'); ?></h1>

                <?php if (get_sub_field('sub_title')) { ?>
                    <div class="sub_title__container">
                        <h4><?php the_sub_field('sub_title'); ?></h4>
                    </div>
                <?php } ?>
            </div>

            

            <?php if (get_sub_field('description')) { ?>
                <p class='description'><?php the_sub_field('description'); ?></p>
         <?php } ?>

        </div>


   

</section>