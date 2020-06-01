<div class='container-wrap' id="inner-header" class="wrap">

<div id="bloginfo" itemscope itemtype="https://schema.org/Organization">



    <div id="logo" itemprop="logo">
        <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url"
            title="<?php bloginfo('name'); ?>">
                <?php echo wp_get_attachment_image(get_sub_field('logo'), 'full', "", array( "alt" => "Site Logo", "itemprop" => "logo" )); ?>
        </a>
    </div>

<?php /*
    <div id="site-title" class="site-title" itemprop="name">
        <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url"
            title="<?php bloginfo('name'); ?>">
            <h3><?php bloginfo('name'); ?></h3>
        </a>
    </div>

    */ ?>






<nav class="header-nav primary-menu" role="navigation" itemscope
    itemtype="https://schema.org/SiteNavigationElement"
    aria-label="<?php _e('Primary Menu ', 'dmtheme'); ?>">

    <?php // added primary menu marker for accessibility 
    ?>
    <h2 class="screen-reader-text"><?php _e('Primary Menu', 'dmtheme'); ?></h2>

    <?php // see all default args here: https://developer.wordpress.org/reference/functions/wp_nav_menu/ 
    ?>

    <?php  wp_nav_menu(
        array(

            'container' => false,                          // remove nav container
            'container_class' => 'menu',                   // class of container (should you choose to use it)
            'menu' => get_sub_field('menu'), // nav name
            'menu_class' => 'nav top-nav main-menu',       // adding custom nav class
        //    'theme_location' => 'main-nav',                // where it's located in the theme

        )
    );  ?>


</div>

</nav>

</div>