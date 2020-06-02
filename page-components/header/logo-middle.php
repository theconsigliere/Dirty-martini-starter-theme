<div class='logo_middle inner' itemscope itemtype="https://schema.org/Organization">



    <div class="logo_middle_nav">

        <div class="menu_toggle"></div>

    
    </div>


    <div class="logo_middle_logo">
       
            <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url"
                title="<?php bloginfo('name'); ?>">
                    <?php echo wp_get_attachment_image(get_sub_field('logo'), 'full', "", array( "alt" => "Site Logo", "itemprop" => "logo", "id" => "logo" )); ?>
            </a>

            <?php /*
                <div id="site-title" class="site-title" itemprop="name">
                    <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url"
                        title="<?php bloginfo('name'); ?>">
                        <h3><?php bloginfo('name'); ?></h3>
                    </a>
                </div>

        */ ?>
        
    </div>

    <?php if ( have_rows('socials') ) {  ?>

    <div class="logo_middle_socials">

		<?php get_template_part('page-components/header/header', 'socials'); ?>
    
    </div>

    <?php } ?>


</div>


<div class="fullscreen-nav fullscreen-nav-js">
        <div class="fullscreen-inner">
        <?php  wp_nav_menu(

            array(

                'container' => false,                          // remove nav container
                'container_class' => 'menu',                   // class of container (should you choose to use it)
                'menu' => get_sub_field('menu'), // nav name
                'menu_class' => 'fullscreen-menu-nav',       // adding custom nav class
            //    'theme_location' => 'main-nav',                // where it's located in the theme

            )
          );  ?>

        </div>
    </div>