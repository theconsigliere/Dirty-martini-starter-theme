<?php
/*
 Template Name: Page Template
 *
 * This is the base custom page template with no loop(!). Why no loop?
 * If you're using ACF fields and replacing the main content box and
 * using this template, you won't need a loop. 
 *
 * To use for your theme, change the name of your template from 
 * "Custom Page Example" above. Example: 
 * 
 * Template Name: Template Page
 * 
 * Then save this template as page-mycustompage.php and it will show up 
 * as a template in the Page Templates drop-down on page edit screens in the admin. 
 * 
 * Important: the "Template Name: " is required by WordPress so that your template
 * will show up as a choice in the admin.
 *
 * Remember to keep the markup and content separate.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
 *
 * Visual interactive WordPress template hierarchy: https://wphierarchy.com
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