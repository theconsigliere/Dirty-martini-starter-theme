

    <?php // open the WordPress loop
	if (have_posts()) : while (have_posts()) : the_post();

			// are there any rows within within our flexible content?
			if (have_rows('header_layouts', 'option')) :

				
				// loop through all the rows of flexible content
				while (have_rows('header_layouts', 'option')) : the_row();

					// Card Section
					if (get_row_layout() == 'logo_left')
						get_template_part('page-components/header/logo', 'left');

					// Content Section
					if (get_row_layout() == 'logo_middle')
					get_template_part('page-components/header/logo', 'middle');


	
				endwhile; // close the loop of flexible content
			endif; // close flexible content conditional

		endwhile;
	endif; // close the WordPress loop 
	?>

