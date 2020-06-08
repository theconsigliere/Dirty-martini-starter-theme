<main class="main" role="main">

    <?php // open the WordPress loop
	if (have_posts()) : while (have_posts()) : the_post();

			// are there any rows within within our flexible content?
			if (have_rows('page_content')) :

				
				// loop through all the rows of flexible content
				while (have_rows('page_content')) : the_row();

					// Text & Title Section
					if (get_row_layout() == 'text_title_section')
					get_template_part('page-components/title', 'section');


					// Experimental Layouts
					if (get_row_layout() == 'experimental_layouts')
						get_template_part('page-components/experimental-layouts/experimental-components');
						

					// Card Section
					if (get_row_layout() == 'card_section')
						get_template_part('page-components/card', 'section');


					// Show Button Section
					if (get_row_layout() == 'button_section')
					get_template_part('page-components/button', 'section');

					// Content Section
					if (get_row_layout() == 'content_section')
					get_template_part('page-components/content', 'content');

					// Blog Section
					if (get_row_layout() == 'blog_section')
						get_template_part('page-components/blog', 'section');

					// Image Section
					if (get_row_layout() == 'image_section')
					get_template_part('page-components/image', 'section');   


					// 	List
					if (get_row_layout() == 'list_section')
					get_template_part('page-components/list', 'section');


					// Slider Section
					if (get_row_layout() == 'slider_section')
					get_template_part('page-components/slider', 'section');



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



					// Contact Form
					if (get_row_layout() == 'contact_form')
						get_template_part('page-components/contact', 'form');



				endwhile; // close the loop of flexible content
			endif; // close flexible content conditional

		endwhile;
	endif; // close the WordPress loop 
	?>

</main>