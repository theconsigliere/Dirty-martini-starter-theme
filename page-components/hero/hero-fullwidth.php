<div class="full-width-hero">
    <?php $image = get_sub_field('hero_image');

    if (!empty($image)) : ?>

    <?php echo wp_get_attachment_image( $image, 'full'); ?>

    <?php endif; ?>

    <div class="full-width-text-group <?php the_sub_field('text_position'); ?>">
        <h1><?php the_sub_field('hero_title'); ?></h1>
        <!-- <div class="underline"></div> -->

        <?php if (get_sub_field('hero_sub_title')) { ?>
        <h4><?php the_sub_field('hero_sub_title'); ?></h4>
        <?php } ?>
       
        <?php if (get_sub_field('hero_desc')) { ?>
        <p class='full-width__desc'><?php the_sub_field('hero_desc'); ?></p>
        <?php } ?>


        <?php 
        $link = get_sub_field('hero_button');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>

</div>