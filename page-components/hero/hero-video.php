<div class="video-hero-header">

    <div class="video-hero-image embed-container">


        <?php

// Load value.
$iframe = get_sub_field('hero_video');

// Use preg_match to find iframe src.
preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];

// Add extra parameters to src and replcae HTML.
$params = array(
    'controls'  => 0,
    'hd'        => 1,
    'autohide'  => 1,
    'autoplay' => 1,
    'loop' => 1
);
$new_src = add_query_arg($params, $src);
$iframe = str_replace($src, $new_src, $iframe);

// Add extra attributes to iframe HTML.
$attributes = 'frameborder="0"';
$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

// Display customized HTML.
echo $iframe;
?>
        <div class="video-overlay" style="background-color:<?php the_sub_field('video_colour'); ?>"></div>
    </div>

    <div class="video-hero-text">
        <?php echo wp_get_attachment_image(get_sub_field('video_logo'), 'full'); ?>
        <h1 class='white zero'><?php the_sub_field('video_title'); ?></h1>
    </div>


</div>