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

					// Content Section
					if (get_row_layout() == 'content_section')
					get_template_part('page-components/content', 'content');


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


								// Two Image Section
								if (get_row_layout() == 'two_image_section')
								get_template_part('page-components/layout/layout', 'two-image-section');      

						endwhile; endif; 

						// Grid Components
						if (get_row_layout() == 'grid')

							if (have_rows('grid_content')) : while (have_rows('grid_content')) : the_row();
		
								// Grid Two Square and one below
								if (get_row_layout() == 'grid_two_one')
								get_template_part('page-components/grid/grid', 'two-one');


								// Grid Two Square
								if (get_row_layout() == 'grid_one_one')
								get_template_part('page-components/grid/grid', 'one-one');

						endwhile; endif; 


					// Company Highlight
					if (get_row_layout() == 'company_highlight')
					get_template_part('page-components/company', 'highlight');

					// 	List
					if (get_row_layout() == 'content_list')
					get_template_part('page-components/content', 'list');

					// 	Event Highlight
					if (get_row_layout() == 'event_highlight')
					get_template_part('page-components/event', 'highlight');

					// 	Quote Section
					if (get_row_layout() == 'content_quote')
					get_template_part('page-components/content', 'quote');


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