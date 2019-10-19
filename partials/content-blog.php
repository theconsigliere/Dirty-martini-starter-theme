<section class="blog-section">

    <div class="blog-title">
        <h2><?php the_sub_field('b_title'); ?></h2>
    </div>


    <div class="l-section">



        <?php

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'posts_per_page' => 3,
            'paged' => $paged, 'post_type' => 'post'
        );
        $postslist = new WP_Query($args);


        if ($postslist->have_posts()) :
            while ($postslist->have_posts()) : $postslist->the_post(); ?>


        <div class="l-item">
            <div class="l-image">
                <?php the_post_thumbnail('full'); ?>
            </div>

            <div class="text-card">
                <h5><?php the_title(); ?></h5>
                <!-- only output first 55 words -->
                <p><?php echo wp_trim_words(get_the_excerpt(), 32); ?></p>
            </div>

            <a href="<?php the_permalink(); ?>">
                <button>Read More</button>
            </a>

        </div>



        <?php endwhile;
        endif; ?>
    </div>




</section>