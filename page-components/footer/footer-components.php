<?php // open the WordPress loop
	if (have_posts()) : while (have_posts()) : the_post();

			// are there any rows within within our flexible content?
			if (have_rows('footer_content')) :

				// loop through all the rows of flexible content
				while (have_rows('footer_content')) : the_row();

					// footer form
					if (get_row_layout() == 'footer_form')
						get_template_part('page-components/footer/footer', 'form');


					// Footer Menu
					if (get_row_layout() == 'footer_menu')
                        get_template_part('page-components/footer/footer', 'menu');

                        
					// footer slider
					if (get_row_layout() == 'footer_slider')
						get_template_part('page-components/footer/footer', 'slider');


					// Footer socials
					if (get_row_layout() == 'footer_socials')
						get_template_part('page-components/footer/footer', 'socials');       
						
					

					

				endwhile; // close the loop of flexible content
			endif; // close flexible content conditional

		endwhile;
	endif; // close the WordPress loop 
	?>