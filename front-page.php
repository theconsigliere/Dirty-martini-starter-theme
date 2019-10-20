<?php
/*
 Template Name: Home Page
 * 
 * Use this template for a static home page. 
 * If you don't need the main loop, remove it
 * and get busy.
*/
?>

<?php get_header(); ?>

<div class="page-hero-header">

    <div class="header-hero-image">
        <?php $image = get_field('header_image');
        if (!empty($image)) : ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" data-no-lazy="1" />
        <?php endif; ?>

    </div>

    <div class="header-hero-text">
        <h1><?php the_field('header_title'); ?></h1>
        <div class="underline"></div>
        <h3><?php the_field('header_sub_title'); ?></h3>
    </div>


</div>

<div id="full-page">

    <div id="inner-content" class="wrap">


        <!-- Page Modules -->
        <?php get_template_part('partials/page', 'modules'); ?>

    </div>
</div>



<?php get_footer(); ?>