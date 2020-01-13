<div class="full-width-hero">
    <?php $image = get_sub_field('hero_image');

    if (!empty($image)) : ?>

    <?php echo wp_get_attachment_image( $image, 'full'); ?>

    <?php endif; ?>

    <div class="full-width-text-group">
        <h1><?php the_sub_field('hero_title'); ?></h1>
        <!-- <div class="underline"></div> -->
        <p><?php the_sub_field('hero_desc'); ?></p>
    </div>

</div>