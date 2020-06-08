<main class="main" role="main">

    <?php // open the WordPress loop
	if (have_posts()) : while (have_posts()) : the_post();

			// are there any rows within within our flexible content?
			if (have_rows('post_content')) :

				
				// loop through all the rows of flexible content
				while (have_rows('post_content')) : the_row();

                    // Text & Title Section
                    if (get_row_layout() == 'text_title_section')
                    get_template_part('page-components/posts/post', 'text-title');

                    // Two Image Section
                    if (get_row_layout() == 'two_image_section')
                    get_template_part('page-components/posts/post', 'two-image-section');    

					// Two Text Section
					if (get_row_layout() == 'two_text_section')
						get_template_part('page-components/posts/post', 'two-text-section');

					// Quote Section
					if (get_row_layout() == 'post_quote')
                    get_template_part('page-components/posts/post', 'quote');
                    
                    // HTML Section
					if (get_row_layout() == 'html_section')
					get_template_part('page-components/posts/post', 'html');

					// Author Section
					if (get_row_layout() == 'author_section')
					get_template_part('page-components/posts/post', 'author');


					// Display Related Blogs
					if (get_row_layout() == 'display_blogs')
					get_template_part('page-components/posts/post', 'display');


				endwhile; // close the loop of flexible content
			endif; // close flexible content conditional ?>


    <div class="previous-next">
        <p><?php posts_nav_link(); ?></p>
    </div>

    <?php	endwhile;
	endif; // close the WordPress loop 
	?>

</main>