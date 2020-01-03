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




<div id="full-page">

    <div id="inner-content" class="wrap">


        <!-- Page Modules -->
        <?php get_template_part('page-components/page', 'components'); ?>

    </div>
</div>




<?php get_footer(); ?>