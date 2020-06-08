<article class="full-width-section">

    <div class="container">
        <div class="post_title-section">

        <?php 

            if( get_sub_field('title_size') == 'h1' ) { ?>

            <h1><?php the_sub_field('ce_s_title'); ?></h1>
                
          <?php  } 

            elseif( get_sub_field('title_size') == 'h2' ) { ?>
                <h2><?php the_sub_field('ce_s_title'); ?></h2>
                            
                <?php  } 

            elseif( get_sub_field('title_size') == 'h3' ) { ?>
                <h3><?php the_sub_field('ce_s_title'); ?></h3>
                            
                <?php  } 

            elseif( get_sub_field('title_size') == 'h4' ) { ?>
                <h4><?php the_sub_field('ce_s_title'); ?></h4>
                            
                <?php  } 

            elseif( get_sub_field('title_size') == 'h5' ) { ?>
                <h5><?php the_sub_field('ce_s_title'); ?></h5>
    
            <?php  } 
              
             else { ?>
                <h6><?php the_sub_field('ce_s_title'); ?></h6>
                                          
              <?php  }  ?>
            
        </div>
        <p class='middle'><?php the_sub_field('ce_s_desc'); ?></p>


    </div>

</article>