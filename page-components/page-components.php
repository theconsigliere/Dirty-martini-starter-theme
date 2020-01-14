<main class="main" role="main">

    <?php // open the WordPress loop
	if (have_posts()) : while (have_posts()) : the_post();

			// are there any rows within within our flexible content?
			if (have_rows('page_content')) :

				
				// loop through all the rows of flexible content
				while (have_rows('page_content')) : the_row();

					// Card Section
					if (get_row_layout() == 'card_section')
						get_template_part('page-components/content', 'card');


					// Blog Section
					if (get_row_layout() == 'blog_section')
						get_template_part('page-components/content', 'blog');

					// Layout Components
					if (get_row_layout() == 'layout')

						if (have_rows('layout_content')) : while (have_rows('layout_content')) : the_row();
		
								// Image Side Text Side Section
								if (get_row_layout() == 'image_text_section')
								get_template_part('page-components/layout/layout', 'image-text');


								// Text & Title Section
								if (get_row_layout() == 'text_title_section')
								get_template_part('page-components/layout/layout', 'text-title');


								// Footer testimonial
								if (get_row_layout() == 'layout_testimonial')
								get_template_part('page-components/layout/layout', 'testimonial');      

						endwhile; endif; 

					// Slider Section
					if (get_row_layout() == 'slider_section')
					get_template_part('page-components/content', 'slider');

					// Show Button Section
					if (get_row_layout() == 'button_section')
						get_template_part('page-components/content', 'button');

					// Contact Form
					if (get_row_layout() == 'contact_form')
						get_template_part('page-components/contact', 'form');



				endwhile; // close the loop of flexible content
			endif; // close flexible content conditional

		endwhile;
	endif; // close the WordPress loop 
	?>

</main>