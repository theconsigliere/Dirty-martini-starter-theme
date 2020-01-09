<section class="column-section container-wrap">

    <div class="title-section">
        <h2><?php the_sub_field('b_title'); ?></h2>
    </div>



    <div class="no-padding-section">

        <?php

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'posts_per_page' => 3,
            'paged' => $paged, 'post_type' => 'post'
        );

        $postslist = new WP_Query($args);

    

        if ($postslist->have_posts()) : while ($postslist->have_posts()) : $postslist->the_post(); ?>

        <div class="row">
            <div class="column">

                <article class="blog-item">
                    <div class="l-image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>

                    <div class="byline">
                        <h6><?php the_author(); ?></h6>
                        <h6><?php foreach((get_the_category()) as $category){ echo $category->name ; }	?></h6>
                        <h6><?php the_date(); ?></h6>
                    </div>


                    <?php the_title('<h3><a href="' . get_the_permalink() . '">', '</a></h3>'); ?>
                    <!-- only output first 55 words -->
                    <p><?php echo wp_trim_words(get_the_excerpt(), 32); ?></p>

                </article>

            </div>
        </div>


        <?php 
        
        // after wp query has been run, reset
        wp_reset_query();
    
        endwhile; else: endif; ?>

    </div>





</section>