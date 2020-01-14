<?php
/*
 Template Name: Home Page
*/
?>

<?php get_header(); ?>


<section>

    <!-- Hero Modules -->
    <?php get_template_part('page-components/hero/hero', 'components'); ?>

</section>



<div id="full-page">

    <div id="inner-content" class="wrap">

        <!-- Page Modules -->
        <?php get_template_part('page-components/page', 'components'); ?>


        <!-- Page Footer-->
        <?php get_template_part('page-components/footer/footer', 'components'); ?>

    </div>
</div>



<?php get_footer(); ?>