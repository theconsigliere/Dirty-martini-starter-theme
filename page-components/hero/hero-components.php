<?php // open the WordPress loop
	if (have_posts()) : while (have_posts()) : the_post();

			// are there any rows within within our flexible content?
			if (have_rows('hero_content')) :

				// loop through all the rows of flexible content
				while (have_rows('hero_content')) : the_row();

					// full width hero
					if (get_row_layout() == 'hero_fullwidth')
						get_template_part('page-components/hero/hero', 'fullwidth');


					// Video hero
					if (get_row_layout() == 'hero_video')
						get_template_part('page-components/hero/hero', 'video');


					// Video Collage
					if (get_row_layout() == 'hero_collage')
					get_template_part('page-components/hero/hero', 'collage');		

					// Text Side Image Side
					if (get_row_layout() == 'hero_text_image')
					get_template_part('page-components/hero/hero-textside-imageside');		
					

				endwhile; // close the loop of flexible content
			endif; // close flexible content conditional

		endwhile;
	endif; // close the WordPress loop 
	?>