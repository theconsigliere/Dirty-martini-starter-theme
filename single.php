

<?php // Edit the loop in /templates/single-loop. Or roll your own. ?>
<?php //get_template_part( 'templates/single', 'loop'); ?>



<?php // related posts function; uncomment below to use ?>
<?php // plate_related_posts(); ?>



<?php get_header(); ?>


<section>

    <!-- Hero Modules -->
    <?php get_template_part('page-components/hero/hero', 'components'); ?>

</section>



<div id="full-page">

    <div id="inner-content" class="wrap">


        <!-- Page Modules -->
        <?php get_template_part('page-components/posts/post', 'components'); ?>


        <!-- Page Footer-->
        <?php get_template_part('page-components/footer/footer', 'components'); ?>


    </div>
</div>





<?php get_footer(); ?>
