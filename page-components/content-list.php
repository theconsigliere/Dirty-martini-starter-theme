<section class="full-width-section">

    <div class="container">
        <div class="title-section">
            <h1><?php the_sub_field('list_title'); ?></h1>
        </div>

        <div class="list-item-group">
            <?php if (have_rows('list_repeater')) : while (have_rows('list_repeater')) : the_row(); ?>

            <div class="list-item">
                <h6><span><?php the_sub_field('tick'); ?></span><?php the_sub_field('list_item_text'); ?></h6>
            </div>

            <?php endwhile; endif; ?>
        </div>

    </div>

</section>