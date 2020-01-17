<section class="">

    <div class="container">

        <div class="row">
            <div class="column">
                <?php echo wp_get_attachment_image(get_sub_field('image_left'), 'full', '', array('class' => 'two-image-image' )); ?>
            </div>
            <div class="column">
                <?php echo wp_get_attachment_image(get_sub_field('image_right'), 'full', '', array('class' => 'two-image-image' )); ?>
            </div>
        </div>

    </div>

</section>