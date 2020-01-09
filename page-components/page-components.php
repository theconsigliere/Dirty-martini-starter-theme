<main class="main" role="main">

    <?php // open the WordPress loop
	if (have_posts()) : while (have_posts()) : the_post();

			// are there any rows within within our flexible content?
			if (have_rows('page_content')) :

				// loop through all the rows of flexible content
				while (have_rows('page_content')) : the_row();

					// full width hero
					if (get_row_layout() == 'hero_fullwidth')
						get_template_part('page-components/hero', 'fullwidth');

					// Card Section
					if (get_row_layout() == 'card_section')
						get_template_part('page-components/content', 'card');

					// Text & Title Section
					if (get_row_layout() == 'text_title_section')
					get_template_part('page-components/content', 'texttitle');

					// Blog Section
					if (get_row_layout() == 'blog_section')
						get_template_part('page-components/content', 'blog');

					// Image Side Text Side Section
					if (get_row_layout() == 'image_text_section')
						get_template_part('page-components/imageside', 'textside');

					// Show Important Buttons
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