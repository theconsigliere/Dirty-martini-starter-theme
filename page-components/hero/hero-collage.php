<div class="hero-collage" style='background-color: <?php the_sub_field('hero_background'); ?>'>

    <div class="grid-collage">
    <?php 
    $images = get_sub_field('hero_images');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $images ): ?>

    <?php foreach( $images as $key=>$image_id ): ?>
    
            <?php echo wp_get_attachment_image( $image_id, $size, "", array( "class" => "grid__collage_item  skip-lazy grid__collage_item_" . $key . "" )  ); ?>
        
    <?php endforeach;  endif; ?>

    </div>

    <div class="full-width-text-group">
        <h1 class='collage-title cursive' style='color: <?php the_sub_field('hero_colour'); ?>'><?php the_sub_field('hero_title'); ?></h1>
        <!-- <div class="underline"></div> -->
    </div>

</div>