<main class="main" role="main">

    <?php // open the WordPress loop
	if (have_posts()) : while (have_posts()) : the_post();

			// are there any rows within within our flexible content?
			if (have_rows('page_content')) :

				// loop through all the rows of flexible content
				while (have_rows('page_content')) : the_row();

					// Candidates & Employers
					if (get_row_layout() == 'two_card_section')
						get_template_part('partials/content', 'ce');

					// Are you looking Section?
					if (get_row_layout() == 'repeater_item_section')
						get_template_part('partials/content', 'looking');

					// Blog sECTION
					if (get_row_layout() == 'blog_section')
						get_template_part('partials/content', 'blog');

					// Newsletter Section
					if (get_row_layout() == 'newsletter_section')
						get_template_part('partials/content', 'newsletter');

					// We are Section
					if (get_row_layout() == 'image_text_section')
						get_template_part('partials/content', 'about');


					// Text Sections
					if (get_row_layout() == 'text_sections')
						get_template_part('partials/content', 'text');

					// Show Important Buttons
					if (get_row_layout() == 'button_section')
						get_template_part('partials/content', 'button');

					// Contact Form
					if (get_row_layout() == 'contact_form')
						get_template_part('partials/contact', 'form');

				endwhile; // close the loop of flexible content
			endif; // close flexible content conditional

		endwhile;
	endif; // close the WordPress loop 
	?>

</main>