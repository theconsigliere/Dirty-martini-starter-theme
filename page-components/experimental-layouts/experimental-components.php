<?php

if (have_rows('experimental_content')) : while (have_rows('experimental_content')) : the_row();
		
// Text trail 
if (get_row_layout() == 'text_trail')
get_template_part('page-components/experimental-layouts/text-trail');


// Marquee https://tympanus.net/codrops/2020/03/31/css-only-marquee-effect/
if (get_row_layout() == 'marquee')
get_template_part('page-components/experimental-layouts/marquee');

endwhile; endif; ?>