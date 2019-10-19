<section class="button-section">


    <div class="button-title">
        <h2><?php the_sub_field('button_title'); ?></h2>
    </div>

    <div class="button-button">

        <a href="<?php the_sub_field('button_link'); ?>">
            <button>
                <p><?php the_sub_field('button_text'); ?></p>
            </button>
        </a>
    </div>

</section>