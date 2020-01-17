<section class="full-width-section">

    <div class="container">

        <div class="row">
            <div class="column">
                <?php 
 
            if( have_rows('text_box_left')): while( have_rows('text_box_left')) : the_row(); ?>

                <h4><?php the_sub_field('text_left_title')?></h4>
                <?php the_sub_field('text_left_desc')?>

                <?php endwhile; endif; ?>
            </div>
            <div class="column">
                <?php 
            
                if( have_rows('text_box_right')): while( have_rows('text_box_right')) : the_row(); ?>

                <h4><?php the_sub_field('text_right_title')?></h4>
                <?php the_sub_field('text_right_desc')?>

                <?php endwhile; endif; ?>
            </div>
        </div>

    </div>

</section>