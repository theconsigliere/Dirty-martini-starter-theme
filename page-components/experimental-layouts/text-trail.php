
<section class='text-trail'>
    <div class="container-wrap">

        <?php if (have_rows('slideshow')) : ?>

        <div class="content">

                <?php while (have_rows('slideshow')) : the_row(); ?>

                <div class="content__slide">

                <div class="content__img">
                    <?php echo wp_get_attachment_image(get_sub_field('image'), 'full', "", array( "class" => "content__img-inner" ) );   ?>
				</div>


                    <div class="content__text-wrap">
                        <span class="content__text">
                                <span class="content__text-inner content__text-inner--stroke"><?php the_sub_field('title'); ?></span>
                        </span>
                        <span class="content__text">
                                <span class="content__text-inner"><?php the_sub_field('title'); ?></span>
                        </span>
                        <span class="content__text content__text--full">
                                <span class="content__text-inner content__text-inner--stroke"><?php the_sub_field('title'); ?></span>
                        </span>
                        <span class="content__text">
                                <span class="content__text-inner content__text-inner--stroke"><?php the_sub_field('title'); ?></span>
                        </span>
                        <span class="content__text">
                                <span class="content__text-inner"><?php the_sub_field('title'); ?></span>
                        </span>
                        <span class="content__text content__text--full">
                                <span class="content__text-inner"><?php the_sub_field('title'); ?></span>
                        </span>
                        <span class="content__text">
                                <span class="content__text-inner content__text-inner--bottom"><?php the_sub_field('title'); ?></span>
                        </span>
                        <span class="content__text">
                                <span class="content__text-inner"><?php the_sub_field('title'); ?></span>
                        </span>
                        <span class="content__text content__text--full">
                                <span class="content__text-inner content__text-inner--stroke"><?php the_sub_field('title'); ?></span>
                        </span>
                        <span class="content__text">
                                <span class="content__text-inner content__text-inner--stroke content__text-inner--bottom"><?php the_sub_field('title'); ?></span>
                        </span>
                        <span class="content__text">
                                <span class="content__text-inner"><?php the_sub_field('title'); ?></span>
                        </span>
                    </div>

             
              
                </div>

                <?php endwhile; ?>

                <nav class="content__nav">
				<button class="content__nav-button content__nav-button--prev">Prev</button>
				<button class="content__nav-button content__nav-button--next">Next</button>
			</nav>

        </div>
        <?php endif; ?>

    </div>


</section>