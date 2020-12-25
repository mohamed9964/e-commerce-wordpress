<?php 
/**
 * Template Name: Shop Page
 */
get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <p><?php the_content(); ?></p>

            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<?php get_footer() ?>