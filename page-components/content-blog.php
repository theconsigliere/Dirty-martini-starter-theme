<section class="column-section container-wrap">

    <div class="title-section">
        <h2><?php the_sub_field('b_title'); ?></h2>
    </div>



    <div class="no-padding-section container-wrap">

        <?php
        $cat_id = get_sub_field('category');

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'posts_per_page' => 12,
            'paged' => $paged, 'post_type' => 'post',
            'category_name' => $cat_id
        );

        $postslist = new WP_Query($args); 

        $found_posts = $postslist->found_posts; 

        // SHOW MORE THAN 3 POSTS
    //----------------------------------------------------
        if ($found_posts > 3 ):  ?>

        <div class="row row-wrap">

            <?php  if ($postslist->have_posts()) : while ($postslist->have_posts()) : $postslist->the_post(); ?>


            <div class="column column-33">

                <article class="blog-item">
                    <div class="l-image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>

                    <div class="byline">
                        <h6><?php foreach((get_the_category()) as $category){ echo $category->name ; }	?></h6>
                        <h6><?php the_date(); ?></h6>
                    </div>


                    <?php the_title('<h3><a href="' . get_the_permalink() . '">', '</a></h3>'); ?>
                    <!-- only output first 55 words -->
                    <p><?php echo wp_trim_words(get_the_excerpt(), 32); ?></p>

                </article>

            </div>

            <?php // Restore original post data.
            wp_reset_postdata(); ?>

            <?php endwhile; else: endif; ?>

        </div>

    </div>

    <?php else:
              // SHOW  3 POSTS
    //----------------------------------------------------
    ?>

    <div class="row">

        <?php  if ($postslist->have_posts()) : while ($postslist->have_posts()) : $postslist->the_post(); ?>


        <div class="column">

            <article class="blog-item">
                <div class="l-image">
                    <?php the_post_thumbnail('full'); ?>
                </div>

                <div class="byline">
                    <h6><?php foreach((get_the_category()) as $category){ echo $category->name ; }	?></h6>
                    <h6><?php the_date(); ?></h6>
                </div>


                <?php the_title('<h3><a href="' . get_the_permalink() . '">', '</a></h3>'); ?>
                <!-- only output first 55 words -->
                <p><?php echo wp_trim_words(get_the_excerpt(), 32); ?></p>

            </article>

        </div>

        <?php // Restore original post data.
wp_reset_postdata(); ?>

        <?php endwhile; else: endif; ?>

    </div>

    </div>



    <?php endif; ?>




</section>